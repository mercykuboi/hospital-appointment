<?php


$host="localhost";
  $user="root";
  $password="";
  $db="mercy"; 
  $connect = mysqli_connect($host, $user, $password, $db);
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
 }
    

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}
else{
  $query = "SELECT * FROM `loginform` WHERE user= '$user' AND password= '$password' AND usertype = '$usertype';"; 
     $result = mysqli_query($connect, $query);
     $rows = mysqli_fetch_array($result);

     if($rows){
      if($usertype=="patient"){
        header('location:patient.php');
      }
      else if($usertype=="doctor"){
        header('location:doctor.php');
      }
      
      else if($usertype=="admin"){
        header('location:admin.php');
      }  
      
     }
     else{
       echo "Wrong details please retry"; 
     }
}
    
      
   
     
      
    mysqli_close($connect); 
?>