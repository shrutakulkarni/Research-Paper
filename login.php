<?php
include "dbconnection.php";
$email=$_POST["email"];
$pass=$_POST["pass"];
$qery="SELECT * FROM `login` WHERE email='$email' AND pass='$pass'";
$result=mysqli_query($conn,$qery);
$row=mysqli_num_rows($result);
if($row==1){
    // echo"done";
    header("location:dashboard.php");
}
else{
    echo "password wrong";
}

?>