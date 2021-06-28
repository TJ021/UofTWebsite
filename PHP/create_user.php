<html>

   <head>
      <title>New User</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }

         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }

         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Create New User</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>Enter a username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Enter a password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
									<label>Enter your first name  :</label><input type = "firstname" name = "firstname" class = "box" /><br/><br />
									<label>Enter your last name  :</label><input type = "lastname" name = "lastname" class = "box" /><br/><br />
									<label>Are you a student, instructor, or ta?  </label><input type = "type" name = "type" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

         </div>

      </div>

			<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "assignment3";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$username = $_POST["username"];
				$password = $_POST["password"];
				$type = $_POST["type"];

				$sql1 = "INSERT INTO admin (username, password, type) VALUES ('$username', '$password', '$type')";

				$sql = mysqli_query($db,"SELECT id FROM admin WHERE firstname = '$firstname' AND lastname = '$lastname' AND type = '$type'");
				$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
				$id = $row['id'];

				$sql2 = "INSERT INTO ('$type') (id, firstname, lastname) VALUES ('$id', '$firstname', '$lastname')";

				if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {
    			echo "New record created successfully";
				}
				else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			?>

   </body>
</html>
