<?php include('header.php'); ?>


<!-- for retrieving data -->
				<?php 
							include('online.php');
							session_start();
                           if ($result = mysqli_query($connect, "SELECT * FROM search_result")) {
                           echo "Returned rows are: " . mysqli_num_rows($result);
  
                      }
					
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
									$email = $row["email"];
									 $address = $row["address"];
							    }
							}
							 $query = "SELECT * FROM `search_result` WHERE name= '$name' AND expertise= '$expertise'
   AND contact = '$contact' AND email = '$email';"; 
     $result = mysqli_query($connect, $query);
     $rows = mysqli_fetch_array($result);

     if($rows){
      if($expertise=="Medicine"){
        echo 'medicine'; 
      }
      else if($expertise=="Heart"){
       echo 'heart';
      }
      
      else if($expertise=="Bone"){
        echo 'bone';
      } 
	  else if($expertise=="Kidney"){
        echo kidney;
      } 
	  else if($expertise=="Cardiologist"){
        echo $name; 
      } 
	  else if($expertise=="Plastic Surgeon"){
        echo $name; 
      } 
	  else if($expertise=="General Physician"){
        echo $name; 
     }  
      
     }
     else{
       echo "No results"; 
     }

							
							
							

							mysqli_close($connect);
				?>
<!-- for retrieving data -->
<div class="btn_previous" style="color:green,width:20px">
       <a href="patient.php" class="previous" style="background-color: grey;
  color: black;">&laquo; Previous</a></div>
<div class="login" style="background-color:purple;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Book Appointment</h3>
			<div class="formstyle" style="float: right;width:500px;padding:20px;margin-right:400px; margin-bottom:30px;background-color:grey;color:#141313;">
				<form action="" style="background:grey;" method="post" class="text-center form-group">
					<label>
						Doctor Name: <input type="text" name="dcontact" value="<?php echo $name; ?>"disabled />
                
					</label><br><br>
 						
					<label>
						Category: <input type="text" name="expertise" value="<?php echo $expertise; ?>"disabled />
					</label><br><br>

					<label>
						Your Name: <input type="text" name="pname" value=""required>
					</label><br><br>

 					<label>
						 Contact: <input type="text" name="contact" value=""required/>
					</label><br><br>
					<label>
						 E-mail: <input type="email" name="email" value="" required/>
					</label><br><br>
 					
					<label>
						 Address: <input type="text" name="address" value="" required>
					</label><br><br>
					<label>
						 Date: <input type="date" name="dates" value=""required>
					</label><br><br>
					<label>
						 Time: <select name="time" required>
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment" required>
										<option value="">-select-</option>
										<option value="Cash">Cash</option>
										<option value="Card">Card</option>
									</select>
					</label><br><br>
					
					
					
			<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">
					Confirm</button>
					<button name="cancel" type="reset" style="padding-right:5px;border-radius:3px;margin-right:;">
					Cancel</button>  

			</form> <br>
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
<br><br><br>

			<!-- update information -->

			
			<?php
                 
						include('online.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,dcontact,expertise, pname,contact,email,
						address,dates,time,payment)
							VALUES ('$name', '$contact', '$expertise','" . $_POST["pname"] . "',
							'". $_POST["contact"] . "','". $_POST["email"] . "','". $_POST["address"] . "',
							'". $_POST["dates"] . "','". $_POST["time"] . "','". $_POST["payment"] . "' )";

							if ($connect->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$connect->close();
						}
					?> 
			 
				<!-- confirming booking -->

	


	</div>
			<!-- update information End -->


 <?php include('footer.php'); ?>


</body>
</html>
