<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
		
		<div class="btn_previous" style="color:green,width:20px">
       <a href="admin.php" class="previous" style="background-color: indigo;
  color: black;">&laquo; Previous</a></div>
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px; background-color:indigo;">
				<?php 
					include('online.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>Name</th>
								
								<th>Address</th>
								<th>contact</th>
								<th>Email</th>
								<th>Expert in</th>

								<th>Fee</th>
								<th>Action</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								// echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['name']."</td>";
								
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['expertise']."</td>";
								
								echo "<td>".$row['fees']."</td>";
								echo "<td><a href='canceldoctor.php?id=".$row['doctorid']."'>Cancel</a></td>";
								
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