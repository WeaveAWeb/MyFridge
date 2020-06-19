<?php
include "dbConnect.php";


$name=$_POST['name'];

$sql="delete from fridge_tb where name='". $_POST['name'] ."'";
if($dbConnect->query($sql)){
 echo "<script>self.close();</script>";
}else{
 echo 'fail to insert sql';
}
?>
