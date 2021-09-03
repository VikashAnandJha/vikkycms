<?php
include 'secure.php';

$type=$_GET['type'];


if($type=="author")
{
    $q=mysqli_query($conn,"insert into authors(name,role) values('Author name','AUTHOR')");
    $last_id = mysqli_insert_id($conn);
    header('location:authors.php?show=edit&id='.$last_id);
}
if($type=="menu")
{
    $q=mysqli_query($conn,"insert into menu_items(display_text) values('Sample Menu name')");
    $last_id = mysqli_insert_id($conn);
    header('location:menu.php?show=edit&item_id='.$last_id);
}

?>