<html>
<head>
  <title>Your Marks</title>

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
$sql = "SELECT assignment, mark FROM grades WHERE student_id = $student_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table id='student_table'>";
    echo "<tr> <th>Assignment</th> <th>Mark</th> <th>Remark request</th> <th>Reason for remark</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $assignment = $row["assignment"];
        $mark = $row["mark"];
        $remark = $row["remark_request"];
        $reason = $row["reason"];

        echo "<tr><td>".$assignment."</td><td>".$mark."</td><td> <input id='checkBox' type='checkbox'> </td>";
		echo "<form action='update.php'><td><input type='text' name='".$assignment."'></td><td><input type='submit' class = 'input' value='submit'></td></form></tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
