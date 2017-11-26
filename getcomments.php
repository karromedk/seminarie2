<?php
include 'dhd.inc.php';
	$sql="SELECT * FROM comments WHERE recipe = '" . $recipe . "'";
	$result=mysqli_query($conn,$sql);
	while($row= mysqli_fetch_assoc($result)){
		echo"<div class='c1'><p>";
		echo $row['uid']."<br>";
		echo $row['date']."<br>";
		echo nl2br($row['message']."<br>");
			if (isset($_SESSION['user']) and $_SESSION['user'] == $row['uid']) {
				echo "</p>
				<form class='delete-form' action= 'deletecomments.php' method='POST' >
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button type='submit' name=commentDelete>Delete</button>
				</form>";
			} echo "</div>";

	}
