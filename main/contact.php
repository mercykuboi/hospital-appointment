
<!DOCTYPE HTML>
<html>
	<head>
		<title> Contact us</title>
		//<link href="appointment.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		  <link rel="stylesheet" href="admin.css"type="text/css"  media="all" >
	</head>
	<body>
		<?php include('header.php'); ?>
		<!--start-wrap-->
     
			<div class="container" >
  <div style="text-align:center;">
    <h2>Contact Us</h2>
    <p>Swing by our offices, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="radiology services.jpg" style="width:100%">
    </div>
    <div class="column">
      <form enctype="multipart/form-data" method="post"  class="text-center" style="margin-left: 110px;" >
			<label>
		First Name: <input type="text" name="firstname" value="" placeholder="firstname" required>
		</label><br><br>

		<label>
		Last Name: <input type="text" name="lastname" value="" placeholder="lastname" required>
		</label><br><br>	

		<label>
		Email: <input type="text" name="email"  value="" placeholder="Your email" required>
		</label><br><br>
		<label>
		Sub-County: <select  name="sub_county" required>
			<option>select</option>
          <option value="Kitale East">Kitale East</option>
          <option value="Kitale West">Kitale West</option>
        </select>
		</label><br><br>
		<label>
		Your Comment: <textarea name="comment" id="" cols="30" rows="4" required></textarea> 
		</label><br><br>
								
		<button name="submit" type="submit" style="margin-left:148px;margin-top:
					 4px;width:95px;border-radius: 3px;height: 30px">Send Us</button> <br>
	 
<address>
  <a href="mailto:transnzoiareferal@gmail.com">transnzoiahospital@gmail.com.com</a><br>
  <a href="tel:+254791380416">(254) 791-380416</a>
</address>
    </div>
  </div>
</div>
	<div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="main.php">Home</a></li>

						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>

		   	<div class="clear"> </div>
		   </div>
		   </div>
</form>
		<!--end-wrap-->
			<?php

						include('online.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (firstname, lastname,email,sub_county,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "',
							'" . $_POST["email"] . "','" . $_POST["sub_county"] ."','" . $_POST["comment"] . "' )";

							if ($connect->query($sql) === TRUE) {
							    echo "<script>location.replace('success.php');</script>";
							} else {
				 echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $connect->error;
							}

							$connect->close();
						}
					?> 
	</body>
</html>
