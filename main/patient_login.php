<?php session_start();  ?>
<?php include('header.php'); ?>





	<!-- this is for donor registration -->
	<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Patient Login</h3>
			<div class="formstyle" style="float: right;padding:20px
			;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;
			background-color:grey;color:#141313;width:400px;height:200px;">
				<form action="" method="post" class="text-center form-group">
					<label>
						 <input type="user" name="user"  placeholder="user" required>
					</label><br><br>
					<label>
						 <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left: -10px;margin-top:30px;
					background-color:green;width: 85px;border-radius: 3px;">Login</button> <br>
					

					<span style="color:#000;">Not a member yet?</span> <a href="registration.php" title="create a account" target="" style="color:#000;">&nbsp;Sign Up</a> <br>


					<!-- login validation -->
			<?php 
					$_SESSION['patient']="";
							
							include('online.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE user= '" 
							. $_POST["user"]."' AND password= '" . $_POST["password"]."'";

							$result = $connect->query($sql);

									if ($result->num_rows > 0) {
										$data1=$data=mysqli_fetch_array(mysqli_query($connect,$sql));
											$_SESSION["pname"]=$data1['pname'];
											$_SESSION["user"]= $_POST["user"];
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('patient.php');</script>";
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

