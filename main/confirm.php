				<!-- confirming booking -->
					<?php

						include('online.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,dcontact,expertise,fees, pname,contact,address,dates,time,payment)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["dcontact"] . "','" .
                             $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] 
                             . "','". $_POST["contact"] . "','". $_POST["address"] . "','". $_POST["dates"] 
                             . "','". $_POST["time"] . "','". $_POST["payment"] . "' )";

							if ($connect->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$connect->close();
						}
					?> 

				<!-- confirming booking -->