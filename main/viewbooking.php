<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>







	<div class="login" style="background-color:white;">

<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">My Appoinment</h3>
		<div><div class="btn_previous" style="color:green,width:20px">
       <a href="patient.php" class="previous" style="background-color: #f1f1f1;
  color: black;">&laquo; Previous</a></div>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px;background-color:purple; margin-left: 40px;">
				<?php 
					include('online.php');
					

					$sql = " SELECT * FROM booking WHERE user='" . $_SESSION["user"] . "' ";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>My Disease Type</th>
								<th>My Doctor</th>
								<th>Appointment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['time']."</td>";
				echo "<td><a href='cancelbooking.php?id=".$row['bookingid']."'>Cancel</a></td>";
						?>
								
						<?php
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>

					
			</div>
		
	
	
		


	</div>

</div>
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
