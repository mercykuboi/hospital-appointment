<?php
	include('online.php');
		
	if(isset($_REQUEST['id'])){
		$id=$_REQUEST['id'];
		
		$sql = "DELETE FROM doctor WHERE `doctorid`='$id'";

		mysqli_query($connect, $sql);
		
		header('location:viewdoctor.php');
	}
?> 