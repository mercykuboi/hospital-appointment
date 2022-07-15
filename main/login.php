
<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Mercy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "txt/css" href="appointment.css">
    <link href="tablet.css" rel="stylesheet" type="text/css"
        media="only screen and (max-device-width:800px), only screen and (-webkit-min-device-pixel-ratio: 2) , screen and (-webkit-device-pixel-ratio:1.5)">
    <link href="phone.css" rel="stylesheet" type="text/css"
        media="only screen and (max-device-width:450px), only screen and (-webkit-min-device-pixel-ratio: 2) , screen and (-webkit-device-pixel-ratio:1.5)">
    <script src="appointment.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    
</head>
<body>
  <div class="btn_previous" style="color:green,width:20px">
       <a href="main.php" class="previous" style="background-color: #f1f1f1;
  color: black;">&laquo; Previous</a>
		<div>
  <div class="container" style="background-color:grey;width: 100%;
    min-height: 550px;margin-top:0px;margin: bottom 20px;"> 
<form action="config.php" method="post" style="border: solid grey 1px;
    width: 30%;
    min-height: 400px;
    margin-top:10px;
     margin-left:450px;
    border-radius: 5px;
     align-items:center;
    padding: 50px;
    color: blue;
    background-color: white;
">

<div class="logo margin-top-30">
					<h2> Login</h2>
				</div>
      <p>
        <label>Username</label>
      <input type="text" id="user" name="user" required>
    </p>
      <P><label>Password</label>
     <input type="password" id="password" name="password" required>
    </P>
    <p>
      select usertype: <select name="usertype" hidden>
        <option value ="admin">admin</option>
      <option value ="doctor">doctor</option>
      <option value ="patient">patient</option>
      </select>
      
</p>
    
     
      <p>
        <input type="submit"  id="btn_2020" value="LOGIN">
        <input type="reset"  id="btn_2020" value="RESET">
  
      </p>
      <div class="new-account">
								Don't have an account yet?
								<a href="registration.php">
									Create an account
								</a>
							</div>
  
   </div> 
  </form>

  </div>

</div>

  

</body>

</html>