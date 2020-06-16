<?php
include "dbConnect.php";
$select_query="SELECT name, SUM(amount) FROM fridge_tb GROUP BY name";
$result=mysqli_query($dbConnect,$select_query);

while($row = mysqli_fetch_assoc($result)) {
   echo $row["name"]. ": ". $row["SUM(amount)"]. "<br>";
   }

mysqli_close($dbConnect);
?>
