<?php
session_start();
date_default_timezone_set('Europe/Stockholm');
include 'dhd.inc.php';
include 'dbh.php';
include 'comments.inc.php';
$recipe= 'panncakes';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Panncakes</title>
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
<h1> Panncakes</h1>
    <h2> Ingredients </h2>
    <ul class="desc">
 <li>1 1/2 cups flour</li>
 <li>3 1/2 teaspoons baking powder</li>
 <li>1 teaspoon salt</li>
 <li>1 tablespoon sugar</li>
 <li>1 egg</li>
 <li>1 1/4 cups milk</li>
 <li>3 tablespoons of butter</li></ul>
 <br>
  <h2> Description </h2>
  <p>
In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.
Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot..</p>
    <img src="pannkakor.jpg" alt= panncakes width="300" height="300">
    <div class=comments>

      <h3> Comments</h3>
      <?php
      if (isset($_SESSION['user'])) {
      echo"<form action='comments.inc.php' method='POST'>
        <input type='hidden' name='uid' value='".$_SESSION['user']."'>
         <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          <input type='hidden' name='recipe' value='panncakes' />
      <textarea name='message'>
Enter text here...</textarea>
<br>
<br>
<button type='submit' name='commentSubmit'>Comment </button>
</form>";}else{
  echo"You can not comment since you are not logged in!";
}
include('getcomments.php');

?>
    
    </div>
  </section>
  </body>
</html>