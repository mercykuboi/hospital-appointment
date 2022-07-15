<?php
	include('online.php');
		
	if(isset($_REQUEST['id'])){
		$id=$_REQUEST['id'];
		
		$sql = "DELETE FROM patient WHERE `patient`='$id'";

		mysqli_query($connect, $sql);
		
		header('location:view_booking.php');
	}
?> 