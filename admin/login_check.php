<?php

include '../inc/db.php';
  

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);



$query="select * from authors where username='$username' and password='$password' and status='ACTIVE'";
 
$q=mysqli_query($conn,$query);


$found=mysqli_num_rows($q);


if($found)
{
	 
session_start();

$drow=mysqli_fetch_array($q);

$uid=$drow['id'];
$uname=$drow['name'];

$_SESSION['uid']=$uid;
$_SESSION['name']=$drow['name'];
$_SESSION['username']=$drow['username'];

$_SESSION['type']=$drow['role'];
$_SESSION['avatar']=$drow['avatar'];






$currenttime=date('d-m-Y H:i:s A');



//mysqli_query($conn,"update doc_login set last_login='$currenttime' where id='$uid'");

//mysqli_query($conn,"insert into logs(text,time) values('$uname logged in to document panel ','$currenttime')");
 
// sendSecureGCM("lOWCARS CENTRAL",$currenttime.":Someone Just Logged into CENTRAL Panel.");
 

header('location:home.php');



}else{

  
	header("location:index.php?msg=Invalid+Login+Details");
}


 

?>