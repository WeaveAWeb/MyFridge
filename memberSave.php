<?php
include "dbConnect_login.php";

 $id=$_POST['id'];
 $pw=$_POST['pw'];
 $email=$_POST['email'];

 $sql = "insert into login (id, pw,email)";
 $sql = $sql. "values('$id','$pw','$email')";
 if($dbConnect->query($sql))
 echo "<script>alert(\"Welcome!\");location.href='02Login.html';
location.replace(link);
window.open(link);</script>";
 else echo 'fail to insert sql';
?>
