<?php
include "dbConnect.php";

 $id=$_POST['id'];
 $pw=$_POST['pw'];
 $email=$_POST['email'];

 $sql = "insert into login (id, pw,email)";
 $sql = $sql. "values('$id','$pw','$email')";
 if($dbConnect->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
?>
