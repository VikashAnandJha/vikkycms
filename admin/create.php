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
if($type=="page")
{
    $q=mysqli_query($conn,"insert into pages(title,status) values('Sample Page','DRAFT')");
    $last_id = mysqli_insert_id($conn);
    header('location:pages.php?show=edit&page_id='.$last_id);
}
if($type=="cat")
{
    $q=mysqli_query($conn,"insert into categories(name,status,created_by) values('Test CAtegory','HIDDEN','-1')");
    $last_id = mysqli_insert_id($conn);
    header('location:categories.php?show=edit&cat_id='.$last_id);
}
if($type=="post")
{

    $q=mysqli_query($conn,"insert into posts(title,status,author,created_at) values('Sample Post','DRAFT','-1','$current_time')");
    $last_id = mysqli_insert_id($conn);
    header('location:posts.php?show=edit&post_id='.$last_id);
}

?>