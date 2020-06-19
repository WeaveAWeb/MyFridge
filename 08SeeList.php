<?php
	include "recipe_dbConnect.php";
	mysqli_set_charset($dbConnect,"utf8");
	$result = mysqli_query($dbConnect,"SELECT * FROM testtable");


?>

<!DOCTYPE html>
<html>

	<head>

		<meta name="viewport" content="width=device-width, intial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="09Shopping.css">

		<style>
			.bt {
				border: 2px dotted black;
				line-height: 180px;
				margin-bottom: 50px;
			}
			.bt a {
				display:block;
			border: #d7d7d7;	
			padding-top:4px;
			text-decoration: none;   
			background-repeat:repeat-x;
			background:#fcfcfc;
			color:#9b9b9b;
			font-size:11px;
			font-family:"돋움,dotum,굴림,gulim,Vertical,Arial";
			}
			.bt a:hover{
			display:block;
			border:#999999;
			padding-top:4px;
			text-decoration: none;
			background:#e5e5e7;
			color:#565656;
			font-size:11px;
			}
		</style>


	</head>


	<body>

		<nav class="navba navbar-collapse">
			<div id="header" class="container-fluid">
				<ul>
					<li><a href="04MyFridge.php">MY FRIDGE</a></li>
					<li><a href="05RecipeRoom.html">RECIPE ROOM</a></li>
					<li><a href="09Shopping.html">SHOPPING</a></li>
				</ul>

				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</div>
		</nav>

		<div id="nav" class="container-fluid">
			<h1 class="h2">MY RECIPES</h1>
		</div>


		<div id="fridge">

		<div id="content" class="container-fluid" style="padding-bottom: 0px">
<?php
$n = 1;
while($row = mysqli_fetch_array($result)){
echo'<form method="post" id="frm'.$n.'" name="frm'.$n.'" action="07SeeRecipe.php">';
echo '<div class="bt">';
echo '<a href="#" onclick="document.getElementById(\'frm'.$n.'\').submit();">';
echo '<img src="example'.$n.'.jpg" style="float: left">';
echo "<div><h1>". $row['Cook_Title'] ."</h1><p>".$row['Cook_info']."</p></div>";
echo '<input style="display:none" name="recinum" id="recinum" value='.$n.' /></a></div>';
echo '</form>';
$n++;
}
mysqli_close($conn);
?>

		</div>

		</div>

		<script src="jquery-3.5.1.min.js"></script>
		<script src="owl.carousel.min.js"></script>
		<script src="jquer.js"></script>

		<div id="fixed" class="container-fluid">
			<p>OpenSourceWebSoftware / Team WWW</p>
		</div>

		<div id="footer">

		</div>


	</body>


</html>
