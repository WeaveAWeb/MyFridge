<?php
include "dbConnect_login.php";

 $id=$_POST['id'];

 $sql = "delete from login where id='$id'";
 if($dbConnect->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
?>
