<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Calender</title>
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
  <div class="month">
  <h2>Calender</h2> 
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12 <a href="meatballs.html"><img src="meatballs2.jpg" alt= "meat" style="width:80%; height:80%;"/></a></li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23 <a href="panncakes.html"><img src="pannkakor.jpg" alt= pankis style="width:80%; height:80%;"/></a></li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</section>

</body>
</html>