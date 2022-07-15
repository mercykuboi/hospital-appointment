<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for viewing appointment -->
	
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Patient Who taken Appoinment</h3>
		<div class="btn_previous" style="color:green,width:20px">
       <a href="admin.php" class="previous" style="background-color: violet;
  color: black;">&laquo; Previous</a></div>
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px; background-color:violet;">
				<?php 
					include('online.php');
					

					$sql = " SELECT * FROM booking";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>Dr.Name</th>
								<th>Contact</th>
								<th>Expert at</th>
								<th>Patient</th>

								<th>PatientContact</th>
								<th>Date</th>
								<th>Time</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dcontact']."</td>";
								
								
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['contact']."</td>";
								
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['time']."</td>";
								
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
