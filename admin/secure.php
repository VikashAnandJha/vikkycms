<?php 
session_start();
include '../inc/db.php'; 

$uid=$_SESSION['uid'];
$type=$_SESSION['type'];

if(!isset($uid) || $type!='cms_admin' )
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