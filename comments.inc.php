<?php

function setComments($conn) {
if(isset($_POST['commentSubmit'])){
	$uid= $_POST['uid'];
	$date= $_POST['date'];
	$recipe= $_POST['recipe'];
	$message= $_POST['message'];
	
	$sql="INSERT INTO comments (uid, date, recipe, message) VALUES ('$uid', '$date', '$recipe', '$message')";
	$result=mysqli_query($conn,$sql);
}
}

function getComments($conn,$recipe){
	$sql="SELECT * FROM comments WHERE recipe = '" . $recipe . "'";
	$result=mysqli_query($conn,$sql);
	while($row= mysqli_fetch_assoc($result)){
		echo"<div class='c1'><p>";
		echo $row['uid']."<br>";
		echo $row['date']."<br>";
		echo nl2br($row['message']."<br>");
			if (isset($_SESSION['user']) and $_SESSION['user'] == $row['uid']) {
				echo "</p>
				<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button type='submit' name=commentDelete>Delete</button>
				</form>";
			} echo "</div>";
	}

	}
		
	function deleteComments($conn){
		if (isset($_POST['commentDelete'])){
			$cid=$_POST['cid'];
			$sql="DELETE FROM comments WHERE cid='$cid'";
			$result=mysqli_query($conn,$sql);
		}

	}
