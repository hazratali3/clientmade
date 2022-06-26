
<?php
require 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query="INSERT INTO `aadata`(id,name,email,subject,message)VALUES(NULL,'$name','$email','$subject','$message')";
$con = mysqli_query ($connection,$query);


if ($con) {
	$_SESSION['status'] = "Thank You";
	$_SESSION['status_code'] = "success";
	$_SESSION['button'] = "OK";
	$_SESSION['text'] = "Your Message Has Been Sent Successfully";

	header('location:index.php');



}
else {
	$_SESSION['error']= "Something Went Wrong";
}

?>