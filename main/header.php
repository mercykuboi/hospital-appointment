<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRANSNZOIA COUNTY HOSPITAL </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="animation.css"> -->
	<!-- <style>
		.error {color: #FF0000;}
	</style> -->
</head>
<body>
	<div class="banner">

		<div class="slider">
			<img src="slide2.png" id="slideImg">
            <img src="slide1.png" id="slideImg">
            
        </div>

	    
			<div class="navbar">
		        <div class="logo" >
					<a href="main.php" style="font-size:30px ;
					 color:dark-blue;">TRANSZOIA COUNTY REFERAL HOSPITAL
					 <br>IN KITALE </a>
				</div>

				<div class="menu-icons">
			      <ul>
				    <li><a href="main.php">Home</a></li>
				    <li><a href="contact.php">Contact Us</a></li>
				    <li><a href="login.php">Login</a></li>
				    <li><a href="logout.php">Logout</a></li>
			     </ul>
				</div>
				
            </div>
        </div>

	</div>
	
	 	
	
	<br> <br><br><br><br><br><br><br><br><br><br><br>
	</div>
	<div class="clearfix"></div>
	<style>

	.banner{
    width:100%;
    overflow: hidden;
	height: 100px;
    margin-top: 10%;
    top:0;
	position:fixed;
	
    }
.slider{
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 0;
}
#slideImg{
    width: 100%;
    max-height: 70vh;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 1%;
    bottom: 5%;
    position: fixed;
}
.overlay{
    width: 100%;
    height: 10vh;
    background: linear-gradient(rgba(0,0,0,0.7)),(rgba(0, 0, 0, 0.7));
    position: absolute;
    top: 0;
}

.navbar{
    display: flex;
        justify-content: center;
        top: 0;
        position: sticky;
        width: 85%;
         align-items: center;
        margin: 0px auto;
}
.logo  {
    flex-basis: 30%;
    margin-top: 0px;
    margin-left: 30px;
    position: fixed;
    
}
 .logo h1{
    width:100px;
    cursor: pointer; 
}

.menu-icons{
    
    display: flex;
        justify-content: center;
        top: 0;
        position: fixed;
        cursor: pointer;
        margin-top: 0px;

}


.menu-icons ul {
        display: flex;
        list-style: none;
        margin: 20px 0px;
        align-items: vertically;

    }

    .menu-icons ul li {
        font-family: century;
        font-size: 2.1 rem;
        font-weight: bold;
    }

    .menu-icons ul li a {
        text-decoration: none;
        color: darkblue;
        padding: 8px 25px;
        transition: all .5 ease;
        
    }
	.clearfix{
		clear:both;
		float:none;
	}
    @keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
    transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
    transform: translateX(-300%);
    }

	</style>
		


	

