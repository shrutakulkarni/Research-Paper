<?php
include "dbconnection.php";
$id =$_POST['pid'];


$qry = "UPDATE `client_entry` SET `status` = 1 WHERE `id` = $id";
$result = mysqli_query($conn,$qry);
if($result){
    header("location:dashboard.php");
}