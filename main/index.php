
<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Mercy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appointment.css"/>
    <link href="tablet.css" rel="stylesheet" type="text/css"
        media="only screen and (max-device-width:800px), only screen and (-webkit-min-device-pixel-ratio: 2) , screen and (-webkit-device-pixel-ratio:1.5)">
    <link href="phone.css" rel="stylesheet" type="text/css"
        media="only screen and (max-device-width:450px), only screen and
         (-webkit-min-device-pixel-ratio: 2) , screen and (-webkit-device-pixel-ratio:1.5)">
    <script src="appointment.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
     <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
    
</head>

<body>

 <nav class="navbar">
        <ul>
            
            <li><a href="#home">Home</a> </li>
            <li><a href="#about">About Hospital</a> </li>
            <li><a href="#services">Services</a> </li>
            <li><a href="#appointment">Appointment</a> </li>
            <li><a href="contact.php">contact</a> </li>
           <li><a href="login.php">login</a> </li>
            <li><a href="registration.php">Signup</a> </li>
            
        </ul>
    </nav>
    
      
  
 <section id="home">

    <div class="logo">
					<a href="main.php" style="font-size: 30px;">TRANSZOIA COUNTY REFERAL HOSPITAL
                     <br>IN KITALE <br>WELCOME</a>
				</div>
        
        
    </section>

    


 <section id="about">
        <h1 class="headings">TRANSZOIA HOSPITAL</h1>
        <div id="pic">
            <img src="Screenshot (137).png" alt="">
            <div id="intro">
                <h2>TRANSNZOIA HOSPITAL</h2>
                <P>Transnzoia county hospital is located in kitale kenya, the hospital offers number of services
                    such as rediology/X-ray, labaratory services,blood services, surgical services and emergency
                    services
                    .it offers 24*7 services.
                </P>
               
            </div>
        </div>
    </section>
    <section id="services">
        <h1 class="headings"> SERVICES</h1>
        <div class="gallery">
            <div class="box">
                <img src="Lab services.jpg" alt="">
                <h1 class="headings"> Lab Services</h1>
                <p>Our services include: Chemistry; 24-hour blood bank services, including typing and cross-matching
                    blood; Coagulation;
                    Flow cytometry; Hematology; Immunology.</p>
            </div>
            <div class="box">
                <img src="surgion.jpg" alt="">
                <h1 class="headings"> Surgical Services</h1>
                <p>supports surgical specialties. Examples. Anaesthesiology, cardiovascular surgery, ENT, general
                    surgery, OB/GYN,
                    orthopaedics, pathology, podiatr.</p>
            </div>
            <div class="box">
                <img src="blood services.jpg" alt="">
                <h1 class="headings"> Blood Services</h1>
                <p>Our services include: 24-hour blood bank services, including typing and cross-matching blood;
                    Coagulation;
                    Flow cytometry; Hematology; Immunology.</p>
            </div>
            <div class="box">
                <img src="radiology services.jpg" alt="">
                <h1 class="headings"> Radiology Services</h1>
                <p>diagnosing and treating disease and injury, using medical imaging techniques such as x-rays, computed
                    tomography (CT),
                    magnetic resonance imaging (MRI), nuclear medicine, positron emission tomography (PET),
                    fusion imaging, and ultrasound.</p>
            </div>
            <div class="box">
                <img src="An ambulance headed to deliver emergency services..jpg" alt="">
                <h1 class="headings"> Emergency services</h1>
                <p>The department of a hospital responsible for the provision of medical and surgical care to patients
                    arriving at the
                    hospital in need of immediate care. Emergency department personnel may also respond to certain
                    situations within the
                    hospital such cardiac arrests.</p>
            </div>


        </div>
    </section>
    <section id="appointment">
        <h1 class="headings"> APPOINTMENT</h1>
         <div class="gallery">
            <div class="box">
                <img src="slide2.png" alt="">
                <h1 class="headings"> Patients</h1>
                <p> Patients Register & Book Appointment</p>
                <div class="button_appointment" ><span><a href="patient_login.php">Click Here</a></span></div>
            </div>
            <div class="box">
                <img src="surgion.jpg" alt="">
                <h1 class="headings"> Doctors</h1>
                <p>Doctors Log into the system.</p>
                 <div class="button_appointment" ><span><a href="doctor_login.php">Click Here</a></span></div>
            </div>
            <div class="box">
                <img src="slide1.png" alt="">
                <h1 class="headings"> Admin</h1>
                <p>Hospital Admin</p>
                 <div class="button_appointment" ><span><a href="login.php">Click Here</a></span></div>
            </div>
           
    </section>
    
</body>

</html>