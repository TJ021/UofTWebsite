<?php
  include('session.php');
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "assignment3";

  // Create connection
  $connection = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

  <div id = "FeedbackHeader" class = "PageHeader">
    <div class = "Title"><b><i>Feedback</i></b></div>
  </div>

  <select name="instructor_ids">
  <?php
  $instructors = mysqli_query($connection, "SELECT firstname FROM instructor");
  while ($row = $instructors->fetch_assoc()){
      echo "<option value='".$row['instructor_id']."'>" .$row['username']. "</option>";
  }
  ?>
  </select>

  <div id = "q1">
    <font size=5 face=arial>What do you like about the instructor teaching?</font>
    <p></p>

    <form>
      <textarea name="quest1" cols="100" rows="20"></textarea>
    </form>

    <form>
      <input class = "Links" type="submit" value="Send Feedback">
    </form>

    <?php $sql2 = "INSERT INTO feedback (instructor_id, question, answer, student_id) VALUES ('".$_POST['instructor_ids']."','What do you like about the instructor teaching?','".$_POST['quest1']."', '".$student_id."')"; ?>

  </div>
  <div id = "q2">
    <font size=5 face=arial>What do you recommend the instructor to do to improve their teaching?</font>
    <p></p>

    <form>
      <textarea name="quest2" cols="100" rows="20"></textarea>
    </form>

    <form>
      <input class = "Links" type="submit" value="Send Feedback">
    </form>

    <?php $sql2 = "INSERT INTO feedback (instructor_id, question, answer, student_id) VALUES ('".$_POST['instructor_ids']."','What do you recommend the instructor to do to improve their teaching?','".$_POST['quest2']."', '".$student_id."')"; ?>

  </div>
  <div id = "q3">
    <font size=5 face=arial>What do you like about the labs?</font>
    <p></p>

    <form>
      <textarea name="quest3" cols="100" rows="20"></textarea>
    </form>

    <form>
      <input class = "Links" type="submit" value="Send Feedback">
    </form>

    <?php $sql3 = "INSERT INTO feedback (instructor_id, question, answer, student_id) VALUES ('".$_POST['instructor_ids']."','What do you like about the labs?', '".$_POST['quest3']."', '".$student_id."')"; ?>

  </div>
  <div id = "q4">
    <font size=5 face=arial>What do you recommend the lab instructors to do to improve their lab teaching?</font>
    <p></p>

    <form>
      <textarea name="quest4" cols="100" rows="20"></textarea>
    </form>

    <form>
      <input class = "Links" type="submit" value="Send Feedback">
    </form>

    <?php $sql4 = "INSERT INTO feedback (instructor_id, question, answer, student_id) VALUES ('".$_POST['instructor_ids']."','What do you recommend the lab instructors to do to improve their lab teaching?','".$_POST['quest4']."', '".$student_id."')"; ?>

  </div>

  <?php
  mysqli_query($connection, $sql1);
  mysqli_query($connection, $sql2);
  mysqli_query($connection, $sql3);
  mysqli_query($connection, $sql4);
  ?>

</body>
</html>
