<?php session_start();

$hostname='localhost';
$username='root';
$password='';
$db='anwar';


$connection=mysqli_connect ($hostname,$username,$password,$db);
 

if($connection) {
//	echo 'success';
}
else{
	'ERROR404'; 
}


?>