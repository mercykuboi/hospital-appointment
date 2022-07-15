<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<!-- <?php include('header.php'); ?> -->






	<!-- this is for viewing feedback -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:darkblue;color: #fff;padding: 5px;">
		All Feedback</h3>
		<div class="btn_previous" style="width:20px;margin-left:50px;font-weight: bolder;margin-bottom: 10px;
 font-size: 1.6rem;color: pink;">
       <a href="doctor.php" > Previous</a>
</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;background-color:purple;">
				<?php 
					include('online.php');

					$sql = " SELECT * FROM feedback";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>Name</th>
								
								<th>Email</th>
								<th>Feedback</th>
								
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								// echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['name']."</td>";
								
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['feedback']."</td>";
								
								
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
