<?php
	session_start();
	$connection = mysqli_connect('localhost','root','','assign');
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$about = $_POST['about'];
$dob = date('y-m-d',strtotime($_POST['dob']));
$captcha = $_POST['captcha'];
if($_SESSION['code']==$captcha){
   $sql = "INSERT INTO assignment(name,email,dob,about)VALUES('$name','$email','$dob','$about')";
   $query = mysqli_query($connection,$sql);
     if($query){
     	echo "submit";
     	header('location:form.php');
     }
     else{
     	echo " not submit";
     }
   }
else{
	echo "invalid captcha";
}}

?>