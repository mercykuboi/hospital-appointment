

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
   <?php include('header.php'); ?> 
    <div  id="ADMIN">
      <div class="container">
          <h1 class="headings"> ADMIN</h1>
     
        <p >
         <h2>Welcome This is Admin page</h2>
                <a href="rateus.php" class="notification" style=
            " background-color: #555;
    color: white;
    text-decoration: none;
    padding: 15px 26px;
    position: relative;
    display: inline-block;
    border-radius: 2px;">
  <span>Inbox</span>
  <span class="badge" style="
  position: absolute;
    top: -10px;
    right: -10px;
    padding: 5px 10px;
    border-radius: 50%;
    background: red;
    color: white;">3</span>
</a>
      </p>

        
            
            <div class="gallery">
                <div class="box">
                <img src="oncology.jpg" alt="">
                <h1 class="headings"> Add Doctor</h1>
                <a href="adddoctor.php" class="btn">Add Doctor</a>
                
            </div>
            <div class="box">
                <img src="Lab services.jpg" alt="">
                <h1 class="headings"> View Appointment</h1>
                <a href="viewappointment.php" class="btn">View_Appointment</a>
               
            </div>
            <div class="box">
                <img src="radiology services.jpg" alt="">
                <h1 class="headings"> View Doctor</h1>
                <a href="viewdoctor.php" class="btn">View Doctor</a>
                
            </div>
            <div class="box">
                <img src="dermatologist.jpg" alt="">
                <h1 class="headings"> View Patients</h1>
                <a href="viewpatients.php" class="btn">view patients</a>
                
            </div>
            <div class="box">
                <img src="slide1.png" alt="">
                <h1 class="headings"> View Feedback</h1>
                <a href="viewfeedback.php" class="btn">View Feedback</a>
                
            </div>
            <div class="box">
                <img src="slide2.png" alt="">
                <h1 class="headings"> Chat</h1>
                <a href="rateus.php" class="btn">chat</a>
                
            </div>



        </div>
    </section>
      </div>
       
  
   


</body>
</html>
