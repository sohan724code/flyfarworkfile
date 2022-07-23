<?php
	include 'config.php';
	$id=$_POST['pkId'];
	$sql = "DELETE FROM `allpackages` WHERE pkId=$id";
	if (mysqli_query($connect, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($connect);
?>