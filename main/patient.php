

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>patient page
    
   </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
   <?php include('header.php'); ?> 
    <div  id="PATIENT">
       
      <div class="container">
          <h1 class="headings"> PATIENT</h1>
          
        <p >
         <h2>Welcome This is Patient page</h2>	
		
      </p> 
        
            
            <div class="gallery">
                <div class="box">
                <img src="oncology.jpg" alt="">
                <h1 class="headings"> Book Appointment</h1>
                <a href="searchdoctor.php" class="btn">Book Appointment</a>
                
            </div>
            <div class="box">
                <img src="Lab services.jpg" alt="">
                <h1 class="headings">View My Booking</h1>
                <a href="viewbooking.php" class="btn">View My Booking</a>
               
            </div>
            <div class="box">
                <img src="radiology services.jpg" alt="">
                <h1 class="headings"> My Details</h1>
                <a href="mydetails.php" class="btn">My Details</a>
                
            </div>
            <div class="box">
                <img src="dermatologist.jpg" alt="">
                <h1 class="headings"> logout</h1>
                <a href="patient_login.php" class="btn">logout</a>
                
            </div>
            <div class="box">
                <img src="slide1.png" alt="">
                <h1 class="headings"> Post Feedback</h1>
                <a href="feedback.php" class="btn">Post Feedback</a>
                
            </div>
            <div class="box">
                <img src="slide2.png" alt="">
                <h1 class="headings"> Confirm Booking</h1>
                <a href="confirm.php" class="btn">Confirm Booking</a>
                
            </div>



        </div>
    </section>
      </div>
       
  
   


</body>
</html>
