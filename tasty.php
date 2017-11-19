<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tasty recipes</title>
    <link rel="stylesheet" type="text/css" href="tastyy.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body> 
  	<ul>
  <li><a href="tasty.php">Home</a></li>
  <li><a href="meatballs.php">Recipe 1</a></li>
  <li><a href="panncakes.php">Recipe 2</a></li>
  <li><a href="calender.php">Calender</a></li>
  <li style="float:right"><a href="logins.php">Log in</a></li>
 <li style="float:right"><a href="createacc.php">Create account</a></li>
</ul>
<section>
  	<h1> Welcome to Tasty Recipes</h1>
  	<p id="corners">
  	
  	On Tasty Recipes you can find various recipes for all around the year. Need some help deciding what to choose?
  	Take a look at our most popular recipes or check out the latest dishes we have added to the Calender. 
  	You find the Calender at the top of this page or <a href="calender.html">Here</a></p><br>
     <?php
    if (isset($_SESSION['user'])) {
echo "You are logged in as: " .$_SESSION['user'];
echo ". You can now write comments under the recipes and share your experiences.";

//sleep(2);
//header("Location:tasty.html");
} else {
  echo "You are not logged in! Press Log in in the right top corner to log in. If you are logged in you can make comments on the recipes and share your experience with others. You can still read all comments!";
}
?>
  </section>
  </body>
</html>