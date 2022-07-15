<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>




	<!-- this is for doctor registration -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Add Doctor</h3>
<div class="btn_previous" style="color:green,width:20px">
       <a href="admin.php" class="previous" style="background-color: grey;
  color: black;">&laquo; Previous</a>
		<div>
		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" action="doctor_patients.php"  method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
				  	
			 		
					<label>
					    <input type="text" name="name" value="" placeholder="Full name" autocomplete="on">
					</label><br><br>
					<label>
						 <input type="text" name="address" value="" placeholder="address" >
					</label><br><br>
					<label>
						 <input type="text" name="contact" value="" placeholder="contact" >
					</label><br><br>

					<label>
						 <input type="email" name="email"  value="" placeholder="email" >
					</label><br><br>
					
					<label>
						 <select name="expertise" >
										<option>-Expert in-</option>
										<option>Medicine</option>
										<option>Heart</option>
										<option>Bone</option>
										<<option>kidney</option>
										<option>Cardiologist</option>
										<option>Plastic Surgeon</option>
										<option>General Physician</option>
										<option>Neurologist</option>
										</select>
					</label><br><br>
					<label>
					     <input type="text" name="doctorid" value="" placeholder="doctorid" >
					</label><br><br>
					<label>
					   <input type="text" name="fees" value="" placeholder="Fee" >
					   </label><br><br>
					   <label>
					   select usertype: <select name="usertype">
                    
                                   <option value ="doctor">doctor</option>
                                  
                                   </select>
					</label><br><br>
					<label>
					   <input type="text" name="user" value="" placeholder="user" required>
					</label><br><br>
					
					<label>
					   <input type="password" name="password" value="" placeholder="password" >
					</label><br><br>
					<label>
						 <input type="file"  name="pic" value="" id="pic" required>
					</label><br><br>
					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add Doctor</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	

					<!-- inserting data -->
					<?php  
						 if(isset($_POST['submit'])){
							$target_dir = "images";
							$target_file = $target_dir . basename($_FILES["pic"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image

						    $check = getimagesize($_FILES["pic"]["tmp_name"]);
						    if($check !== false) {
						        // echo "File is an image - " . $check["mime"] . ".";
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }

							// Check if file already exists
							if (file_exists($target_file)) {
							    echo "<script>alert('Sorry, file already exists.');</script>";
							    $uploadOk = 0;
							}
							//allow certain file formats
							if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
								echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
								$uploadok=0;
							}	
						else{
							if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
									include('online.php');
									$sql1 = "SELECT * FROM doctor WHERE doctorid='".$_POST["doctorid"]."' OR 
									email= '" . $_POST["email"] . "' ";
	              					$result = $connect->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, doctorid or E-mail already exist!');</script>";
	              					}
	              					else{
					$sql = "INSERT INTO doctor (name,address,contact,email,expertise,doctorid,fees,usertype,
					user,password,pic)
										VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "',
										'" . $_POST["contact"] . "','" . $_POST["email"] . "',
										 '" . $_POST["expertise"] . "','" . $_POST["doctorid"] . "',
										 '" . $_POST["fees"] . "','" . $_POST["usertype"] . "'
										 ,'" . $_POST["user"] . "','" . $_POST["password"] . "',
										 '" . basename($_FILES["pic"]["name"]) ."' )";

					if ($connect->query($sql) === TRUE) {
				echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
							} else {
					 echo "<script>alert('There was an Error')<script>";
										}
									}

									$connect->close();
							} else {
								echo "<script>alert('sorry there was an error!');</script>";
							}
							
							
						}
				}
				?>
					<!-- inserting data -->

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	



</body>
</html>