<?php
session_start();
date_default_timezone_set('Europe/Stockholm');
include 'dhd.inc.php';
include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Meatballs</title>
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
  	<h1> Meatballs</h1>
  	<h2> Ingredients </h2>
  	<ul class="desc">
 <li>500 g meat</li>
 <li>1/2 dl breadcrum</li>
 <li>1 dl cream</li>
 <li>1 chopped onion</li>
 <li>1 egg</li>
 <li>1 teaspoon salt</li>
 <li>black peppar</li>
 <li>2 tablespoons of butter</li>
 </ul>
 <p>For mached potatoes</p>
 <ul class="desc">
 <li>1 kg potatoes</li>
 <li>2 dl milk</li>
 <li>salt and peppar</li>
</ul><br>
	<h2> Description </h2>
	<p>
Mix bread and cream. Let swell 10 min. Add the fries, onions, eggs, salt and pepper. Stir to a smooth smear. Form the batter to even buns. Fry them in butter and rapeseed oil on medium 3-5 minutes.

Peel the potatoes and cut into pieces. Boil the soft in lightly salted water for 10-15 minutes. Pour the water and squeeze the potatoes through puree or mash with a shock directly in the saucepan. Heat the milk and cream and stir in the potatoes. Seasoning with salt and pepper. Stir the mash airily. </p>
  	<img src="meatballs2.jpg" alt="meat" width="400" height="300">

  	<div class=comments>

  		<h3> Comments</h3>
  		<?php
      if(isset($_SESSION['user'])){

        echo"<form method='POST' action='".setComments($conn)."'>
        <input type='hidden' name='uid' value='".$_SESSION['user']."'>
         <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
         <input type='hidden' name='recipe' value='meatballs' />
      <textarea name='message'>
Enter text here...</textarea>
<br>
<br>
<button type='submit' name='commentSubmit'>Comment </button>
</form>";
}else{
  echo"You can not comment since you are not logged in!";
}
getComments($conn, "meatballs");
?>
  	</div>
  </section>
  </body>
</html>