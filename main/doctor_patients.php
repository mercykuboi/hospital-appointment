<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>


<!-- for retrieving data -->
				<?php 
							include('online.php');
							
							$sql="SELECT * FROM doctor Where  user='" . $_SESSION["user"] . "' ";
							$result=mysqli_query($connect,$sql);
							while ($row=mysqli_fetch_assoc($result)) {
								
								$name=$row['name'];
								$address=$row['address'];
								$contact=$row['contact'];
								$email=$row['email'];
								$doctorid=$row['doctorid'];
								$expertise=$row['expertise'];
								$fees=$row['fees'];
								$pic=$row['pic'];

								
							}
			
							

							mysqli_close($connect);
				?>
<!-- for retriving data -->

<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
		<div class="btn_previous" style="color:green,width:20px">
       <a href="doctor.php" class="previous" style="background-color: violet;
  color: black;">&laquo; Previous</a></div>
			<div class="formstyle" style="float: right;padding:20px;
			border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color
			:violet;color:#141313;">
				<form action="#" method="post" class="text-center form-group">
					<img src="../photo/<?php echo @$pic; ?>" style="padding-left:40px
					;width:165px;height:115px;float: left;margin-bottom:10px;margin-left:35px;"/>
					<label>
						 <input type="file" name="pic" value="<?php echo @$pic; ?>">
					</label><br><br>

					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" required>
					</label><br><br>

 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>"  required>
					</label><br><br>

					
					<label>
						Contact: <input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" required>
					</label><br><br>
					<label>
						DoctorId: <input type="text" name="doctorid" value="<?php echo $doctorid; ?>"  disabled>
					</label><br><br>
					<label>
						Expert in: <input type="email" name="email" value="<?php echo $expertise; ?>"  disabled>
					</label><br><br>

					<label>
						Fee: <input type="text" name="fees" value="<?php echo $fees; ?>"  disabled>
					</label><br><br>
					<label>

					
					
					<button name="submit" type="submit" style="margin-left:30px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>


			</form> <br><br>

	</div>
	
	
</div>


			<!-- update information -->

				<?php

						include('online.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE doctor SET name='" .$_POST["name"]. "' 
							,address='" .$_POST["address"]."' ,
							 contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' 
							 ,pic='" .$_POST["pic"]. "' WHERE user='" . $_SESSION["userid"] . "'";
		
							if (mysqli_query($connect, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($connect);
													}
					?> 
			<!-- update information End -->


  <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>



</body>
</html>
