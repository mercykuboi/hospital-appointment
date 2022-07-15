<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
 <?php include('header.php'); ?> 

	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search result</h3>
		<div><div class="btn_previous" style="color:green,width:20px">
       <a href="patient.php" class="previous" style="background-color: violet;
  color: black;">&laquo; Previous</a></div>
		
		
	</div>
       <div class="all_user" style="margin-top:0px; margin-left: 40px; background-color:violet;">  
	
		
<!-- result -->

					<?php 
					include('online.php');
					

					$sql = " SELECT * FROM doctor WHERE expertise = '" . $_POST["expertise"]."' ";
					$result = mysqli_query($connect,$sql);
					$count = mysqli_num_rows($result);

					

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>Name</th>
								<th>Mobile</th>
								
								<th>Email</th>
								<th>Expertise in</th>
								<th>Book</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";

								echo "<td>".$row['expertise']."</td>";
		
								
						?>
							<td><a href="bookappointment.php?doc_id=<?php echo $row['doctorid'] ?>">Book</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
						$sql = " SELECT * FROM doctor WHERE expertise = '" . $_POST["expertise"]."' ";
						$result = mysqli_query($connect,$sql);
						$row=mysqli_fetch_array($result);
						echo $row[0];

						$sql2 = "INSERT INTO `search_result` ( `name`, `contact`, `email`, `expertise`) 
						VALUES 
						( '$row[name]', '$row[contact]', '$row[email]',
						  '$row[expertise]');";
						mysqli_query($connect,$sql2);
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

	

					?>
					<!-- result -->
	</div>



	<button style="margin-left: 605px;background-color:#332f30;color: antiquewhite;width: 115px;height: 
	30px;margin-bottom: 5px;" >
	<a href="searchdoctor.php">Search Again</a></button>
	
	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
