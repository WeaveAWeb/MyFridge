<!--DB 연결하기-->
<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'root';
 $dbName = 'recipedata';
 $dbConnect = new mysqli($host, $user, $pw, $dbName);
 ?>