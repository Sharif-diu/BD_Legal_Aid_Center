<?php
require_once '../config/connection.php';
require_once './session_check.php';
$blog_id = $_GET['blog_id'];   
$query="delete from blog where id=$blog_id"; 
$result=mysqli_query($con,$query) or die ('date Query is not execute !!');
header("Location: blog.php");
?>