<?php
include "dbConnect.php";

$kind=$_POST['kind'];
$name=$_POST['name'];
$amount=$_POST['amount'];
$e_date=$_POST['e_date'];

 $sql = "insert into fridge_tb (kind, name, amount, e_date)";
 $sql = $sql. "values('$kind','$name','$amount','$e_date')";
 if($dbConnect->query($sql)){
  echo "<script>opener.document.location.reload();self.close();</script>";
 }else{
  echo 'fail to insert sql';
 }
?>
