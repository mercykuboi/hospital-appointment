<?php
if(isset($_POST['submit'])&&isset($_FILES['my_image'])){
	include('online.php');
echo "<pre>";
print_r($_FILES['my_image']);
echo "</pre>";
$img_name = $_FILES['my_image'] ['name'];
$img_size= $_FILES['my_image'] ['size'];
$tmp_name = $_FILES['my_image'] ['tmp_name'];
$error = $_FILES['my_image'] ['error'];

  if($error===0){
      if ($img_size > 127000){
		$em="img too large!";
	  }else{
		$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
		$img_ex_lc=strtolower($img_ex);
		$allowed_exs=array("jpeg","png","jpg");
		if(in_array($img_ex_lc,$allowed_exs)){
          $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
		  $img_upload_path='photo/'.$new_img_name;
		  move_uploaded_file($tmp_name,$img_upload_path);

		  //insert into database
		  $sql = "INSERT INTO doctor(name,address,contact,email,expertise,userid,fee,password,img_url)
									VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "'
									,'" . $_POST["contact"] . "','" . $_POST["email"] . "',
									 '" . $_POST["expertise"] . "','" . $_POST["userid"] . "',
									 '" . $_POST["fee"] . "','" . $_POST["password"] . "',
									 '$new_img_name' )";
									 mysqli_query(connect, $sql);
									 header("Location:view.php");

		}else{
			$em="you cant upload file of this type!";
		}
		
	  }
  }else {
	$em="unknown error occurred!";
  }
}



?>




 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Image upload</title>
<style>
	body{
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		min-height:100vh;
	}
</style>

   

</head>
<body>
	<?php if (isset($_GET['error']));?>
		<p><?php echo $_GET['error']?>;</p>
  <form action ="upload.php" enctype="multipart/form-data" method="post">
<input type="file" name="my_image">
<input type="submit" name="submit" value="Upload">



   
  </form>
       
  
   


</body>
</html>

<?php

include('online.php');




?>









<?php
					
					// if(isset($_POST['submit'])){
							$target_dir = "/photo";
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
							    echo "Sorry, file already exists.";
							    $uploadOk = 0;
							}
							//aloow certain file formats
							if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
								echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
								$uploadok=0;
							}	
						else{
							if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
								include('../online.php');
								$sql = "INSERT INTO doctor (name,address,contact,email,expertise,userid,fee,password,pic)
									VALUES ('" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["userid"] . "','" . $_POST["fee"] . "','" . $_POST["password"] . "','" . basename($_FILES["pic"]["name"]) ."' )";

									if ($conn->query($sql) === TRUE) {
									    echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
									} else {
									    echo "<script>alert('There was an Error')<script>";
									}

									$conn->close();
							} else {
								echo "<script>alert('sorry there was an error uploading your file.');</script>";
							}
							
							
						}
				// }
			?> 
		<!-- validation and insertion End-->