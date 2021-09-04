<?php  
error_reporting(0); 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'vikkycms'); 

$device=$_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set('Asia/kolkata');

  $ip = $_SERVER['REMOTE_ADDR'];  // This will contain the ip of the request

 
 

$conn=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
 

$current_time=date('d-m-Y H:i:s A');
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>