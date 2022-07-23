<?php
	include 'config.php';
	$id=$_GET['id'];
	$sql = "DELETE FROM `randomText` WHERE id=$id";
	if (mysqli_query($connect, $sql)) {
		header("Location: index.php");
	} 
	else {
		
	}
	mysqli_close($connect);
?>