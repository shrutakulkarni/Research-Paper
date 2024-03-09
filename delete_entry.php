<?php
include "dbconnection.php";
$id = $_POST["id"];
// $id = $_GET["id"];
echo $id;
$qry="DELETE FROM `client_entry` WHERE id=$id";
$done=mysqli_query($conn,$qry);
if($done){
  header("location:dashboard.php");
}
?>