<?php session_start();  ?>
<?php include('header.php'); ?>





	<!-- this is for donor registration -->
	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Doctor Login</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						 <input type="user" name="user"  placeholder="user" required>
					</label><br><br>
					<label>
						 <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left: -26px;width: 85px;border-radius: 3px;">Login</button> <br>

					<span style="color:#000;">Not a member yet?</span> <a href="registration.php" title="create a account" target="" style="color:#000;">&nbsp;Sign Up</a> <br>


					<!-- login validation -->
			<?php 
					$_SESSION['doctor']="";
							
							include('online.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM doctor WHERE user= '" 
							. $_POST["user"]."' AND password= '" . $_POST["password"]."'";


							$result = $connect->query($sql);

									if ($result->num_rows > 0) {
										$data1=$data=mysqli_fetch_array(mysqli_query($connect,$sql));
											$_SESSION["dname"]=$data1['name'];
											$_SESSION["user"]= $_POST["user"];
											$_SESSION['doctor']= "yes";
										    echo "<script>location.replace('doctor.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
											echo $_SESSION["user"];
										}
						$connect->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

