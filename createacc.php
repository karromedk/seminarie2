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
  <h1>Sign up as a new user</h1>
  <p>Fill in the boxes with a username and a password</p><br>
  	<form action="createaccount.php" method="post">
<input type="text" name="uid" placeholder="Username"/>
<input type="password" name="psw" placeholder="Password" />
<input type="submit" name="Login" value="Sign up">
</form>
  </section>
  </body>
</html>