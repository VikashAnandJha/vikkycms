<?php 
session_start();
include '../inc/db.php'; 
include '../inc/functions.php'; 

$uid=$_SESSION['uid'];
$type=$_SESSION['type'];

$name=$_SESSION['name'];
$username=$_SESSION['username'];
$avatar=$_SESSION['avatar'];
 
if(!isset($uid) && ($type!='ADMIN' || $type!='AUTHOR')  )
{
	header("location:index.php?msg=You have to login first");
	
	?>
	
<script>
    window.location.href="location:index.php?msg=You have to login first";

</script>
	
	<?php
}else{
 
}
 
 
?>