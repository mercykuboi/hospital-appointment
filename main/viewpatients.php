<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>







	
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">View Patient</h3>
		<div><div class="btn_previous" style="color:green,width:20px">
       <a href="admin.php" class="previous" style="background-color: purple;
  color: black;">&laquo; Previous</a></div>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px;background-color:purple; margin-left: 40px;">
				<?php 
					include('online.php');
					

					$sql = " SELECT * FROM patient ";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Patient Name</th>
								<th>Age</th>
								<th>Contact</th>
								<th>Gender</th>
								<th>Address</th>
                                <th>Email</th>
                                <th>Action</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['age']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								echo "<td>".$row['gender']."</td>";
                                echo "<td>".$row['paddress']."</td>";
                                echo "<td>".$row['pemail']."</td>";
				echo "<td><a href='cancelpatient.php?id=".$row['patientid']."'>Cancel</a></td>";
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

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
