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
<h1>Log in to Tasty Recipe</h1>
<?php
if (isset($_SESSION['user'])) {
echo "Welcome user:" .$_SESSION['user'];

//sleep(2);
//header("Location:tasty.html");
} else {
  echo "You are not logged in!";
  
}
?>
<div>
  	<form action="logintest.php" method="post">
<input type="text" name="uid" placeholder="Username"/><br>
<input type="password" name="psw" placeholder="Password" /><br>
<input type="submit" name="Login" value="Login">
</form>
</div>
<div >
<form action="loggedout.php">
  <input type="submit" name="Sign out" value="Sign out"> 
</form>
</div>
  </section>
  </body>
</html>