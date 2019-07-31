<?php

$name= "";
$first_name="";
$last_name="";
$password="";
$confirm ="";
$email="";



$servername ="localhost";
$username="root";
$password="";
$dbname="info";
  
$connect = mysqli_connect($servername,$username,$password,$dbname);

if($connect->connect_error){
	die("connection failed".$connect);
} else{

	echo "successful";
}
if(isset($_POST['submit'])){
$name = $_POST['name'];
$first_name = $_POST['first name'];
$last_name = $_POST['last name'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$email = $_POST['email'];


$sql = "INSERT INTO register_now(name,password,confirm,email,first_name,last_name)VALUES('$name','$password','$confirm','$email','$first_name','$last_name')";


	mysqli_query($connect,$sql);
	header('location:index.php');
}








?>