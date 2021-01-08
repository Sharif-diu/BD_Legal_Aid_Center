<?php
require_once '../config/connection.php';
require_once './session_check.php';
$service_id = $_GET['service_id'];   
$query="delete from services where id=$service_id"; 
$result=mysqli_query($con,$query) or die ('date Query is not execute !!');
header("Location: service.php");
?>