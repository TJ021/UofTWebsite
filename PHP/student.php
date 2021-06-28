<?php
   include('session.php');
?>
<html>
  <head>
    <title>Welcome </title>

    <link rel="stylesheet" type="text/css" href="index.css">
  </head>

  <body>
    <div class = "Header"></div>
    <div class = "Logo">
      <img src="pics/UofT_Logo.png" height="250" width="500">
    </div>

    <div class = "Signout">
      <a href = "logout.php">Sign Out</a>
    </div>

    <div class = "TitleText">
      Welcome <?php echo $student_name; ?>!
    </div>

    <div class = "space"></div>

    <div class = "Text">
      <form method="post" action="student_fetch.php">
		    Your Marks:
  	    <input type="submit" class = "input" name="sButton" value="Marks"><br>
	    </form>

      <form method="post" action="feedback.php">
        Give your teacher feedback:
        <input type="submit" class = "input" name="sButton" value="Feedback">
      </form>
    </div>


      <div class = "Footer">
        <form>
          <input class="FooterLinks" type="button" value="Home"
          onclick="window.location.href='index.html'">

          <input class="FooterLinks" type="button" value="Course Team"
          onclick="window.location.href='Course_Team.html'">

          <input class="FooterLinks" type="button" value="Assignments"
          onclick="window.location.href='Assignments.html'">

          <input class="FooterLinks" type="button" value="Syllabus"
          onclick="window.location.href='Extra Files/Syllabus.pdf'">

          <input class="FooterLinks" type="button" value="Markus"
          onclick="window.location.href='https://markus.utsc.utoronto.ca/cscb20w18/?locale=en'">

          <input class="FooterLinks" type="button" value="Labs"
          onclick="window.location.href='Labs.html'">

          <input class="FooterLinks" type="button" value="Piazza"
          onclick="window.location.href='https://piazza.com/class/jcpjjp5l4bywd'">

          <input class="FooterLinks" type="button" value="Feedback"
          onclick="window.location.href='Feedback.html'">
        </form>
      </div>
  </body>

</html>
