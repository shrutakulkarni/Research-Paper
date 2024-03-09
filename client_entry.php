<?php
include "dbconnection.php";
$name =$_POST['uname'];
$title =$_POST['title'];
$type =$_POST['type'];
$file =$_FILES['demo'];
$fileName =$_FILES['demo']['name'];

$target_dir = "uploads/";
$target_file = $target_dir.$fileName;

move_uploaded_file($_FILES["demo"]["tmp_name"], $target_file);

$qry = "INSERT INTO `client_entry`(`fname`, `ftitle`, `ftype`, `ffile`) VALUES ('$name','$title','$type','$fileName')";
$result = mysqli_query($conn,$qry);
if($result){
    header("location:callforpaper.php?upload=1");
}
else {
    header("location:callforpaper.php?upload=0");
}
