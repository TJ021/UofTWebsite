<html>
<head>
  <title>Student Marks</title>
  <link rel="stylesheet" type="text/css" href="index.css">

  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<?php
include('session.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "assignment3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT assignment, mark, firstname, lastname, g.student_id FROM grades AS g INNER JOIN student AS s ON g.student_id = s.student_id WHERE g.instructor_id = $instructor_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table id='instructor_table'>";
    echo "<tr><th>StudenID</th><th>First Name</th><th>Last Name</th><th>Assignment</th><th>Mark</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {

        $studentId = $row["student_id"];
        $fistname = $row["firstname"];
        $lastname = $row["lastname"];
        $assignment = $row["assignment"];
        $mark = $row["mark"];

        echo "<tr><td>".$studentId."</td><td>".$fistname."</td><td>".$lastname."</td><td>".$assignment."</td>";
        echo "<form action='update.php'><td><input type='text' name='test' value='".$mark."'></td><td><input type='submit' class = 'input' value='submit'></td></form></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>


</body>
</html>
