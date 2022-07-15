<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>


<!-- for retrieving data -->
				<?php 
							include('online.php');
							$sql="SELECT * FROM patient Where  user='" . $_SESSION["user"] . "' ";
			
							$q=mysqli_query($connect,$sql);
							$row=mysqli_num_rows($q);

							$data=mysqli_fetch_array($q);
							$pname=$data['pname'];
							$paddress=$data['paddress'];
							$pcontact=$data['pcontact'];
							$pemail=$data['pemail'];
							

							mysqli_close($connect);
				?>
<!-- for retrieving data -->

<div class="login" style="background-color:white;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
		<div class="btn_previous" style="color:green,width:20px">
       <a href="patient.php" class="previous" style="background-color: grey;
  color: black;font-size: 1.3rem;">&laquo; Previous</a></div>
			<div class="formstyle" style="float: right;padding:20px;
			border: 1px solid grey;margin-right:480px; margin-top:30px;background-color:grey;
			color:#141313;width:400px;min-height:200px;">
				<form action="" method="post" class="text-center form-group">
					

					<label>
						Your Name: <input type="text" name="pname" value="<?php echo $pname; ?>" required>
					</label><br><br>

 					<label>
						Address: <input type="text" name="paddress" value="<?php echo $paddress; ?>"  required>
					</label><br><br>

					
					<label>
						Contact: <input type="text" name="pcontact" value="<?php echo $pcontact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Email: <input type="email" name="pemail" value="<?php echo $pemail; ?>" " required>
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
						$sql="UPDATE patient SET pname='" .$_POST["pname"]. "' ,paddress='" .$_POST["paddress"]."' ,
						pcontact='" .$_POST["pcontact"]. "',pemail='" .$_POST["pemail"]. "' 
						 WHERE user='" . $_SESSION["user"] . "'";
		
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
