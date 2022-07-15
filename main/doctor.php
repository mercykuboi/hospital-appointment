 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Doctor Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
   <?php include('header.php'); ?> 
    <div  id="ADMIN">
      <div class="container">
          <h1 class="headings"> DOCTOR</h1>
        <p >
         <h2>Welcome This is Doctor page</h2>
      </p>
        
            
            <div class="gallery">
                
                <div class="box">
                <img src="oncology.jpg" alt="">
                <h1 class="headings"> My Appointment</h1>
                <a href="doctorappointment.php" class="btn">My Appointment</a>
                
            </div>
            <div class="box">
                <img src="Lab services.jpg" alt="">
                <h1 class="headings"> My Details</h1>
                <a href="doctor_patients.php" class="btn">My Details</a>
               
            </div>
            <div class="box">
                <img src="radiology services.jpg" alt="">
                <h1 class="headings"> Send Reminder</h1>
                <a href="send_reminder.php" class="btn">Send Reminder</a>
                
            </div>
            <div class="box">
                <img src="dermatologist.jpg" alt="">
                <h1 class="headings"> logout</h1>
                <a href="doctor_login.php" class="btn">logout</a>
                
            </div>
            
        </div>
    </section>
      </div>
       
  
   


</body>
</html>

