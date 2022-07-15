 <?php if(!isset($_SESSION)){
	
	session_start();

  
	}

?> 

<?php include('header.php'); ?>






	<!-- this is for doctor -->
	
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">
		Today's Appointment</h3>
		<div class="btn_previous" style="color:green,width:20px">
       <a href="doctor.php" class="previous" style="background-color: green;
  color: black;">&laquo; Previous</a></div>
		
      </div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;background-color:green;">
			<?php 


?>
				<?php 
				$_SESSION['dname']="";
					include('online.php');

					//$sql = " SELECT pname,contact,email,address,dates,time,dname FROM booking";

					$sql="SELECT * FROM booking Where  user='" . $_SESSION["user"] . "' ";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
							    
								<th>dname</th>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>address</th>
								<th>Date</th>
								<th>Time</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['time']."</td>";
								echo "</tr>";
								echo $_SESSION["dname"];
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>".$_SESSION["dname"];
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

