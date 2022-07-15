<?php
	include('online.php');
		
	if(isset($_REQUEST['id'])){
		$id=$_REQUEST['id'];
		
		$sql = "DELETE FROM booking WHERE `bookingid`='$id'";

		mysqli_query($connect, $sql);
		
		header('location:viewbooking.php');
	}
?> 