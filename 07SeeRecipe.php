<!--process2.php-->
<?php
	include "recipe_dbConnect.php";
	mysqli_set_charset($dbConnect,"utf8");
	$num=3;
	$result = mysqli_query($dbConnect,"SELECT * FROM testtable where id='$num';");
 $row = mysqli_fetch_array($result);


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
		<title>자취방 냉장고</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="07SeeRecipe.css">
</head>
<body>

	<nav class="navba navbar-collapse">
		<div id="header" class="container-fluid">
			<ul>
				<li><a href="04MyFridge.html">MY FRIDGE</a></li>
				<li><a href="05RecipeRoom.html">RECIPE ROOM</a></li>
				<li><a href="09Shopping.html">SHOPPING</a></li>
			</ul>

			<span class="glyphicon glyphicon-menu-hamburger" style="color: white; size: 200%;"></span>
		</div>
	</nav>

	<div id="nav" class="container-fluid">
		<h1 class="h2">MY RECIPES</h1>
	</div>

	<div id="fridge">

	<div id="content" class="container-fluid">
	<div class="row bg-grey">
   <?php
   //if ($Cook_Title&&$Cook_info&&cook_cag_1&&cook_cag_2&&cook_cag_3) {
    ?>
	<h1 id="foodTitle"><?php echo $row['Cook_Title']; ?> </h1>
	  <!--이미지 삽입 추가해야 함-->
	<br><p id="foodInfo"><?php echo $row['Cook_info'];?></p><br>
	<p class="foodInfo2">카테고리 : </p><p class="foodInfo2"><?php echo $row['cook_cag_1'];?></p>
	<span style="color:#9ACD32;font-size:20px;"><b> | </b></span>
	<p class="foodInfo2"><?php echo $row['cook_cag_2'];?></p>

	<div class="container-fluid" style="text-align:center">
		<div class="row">
			<div class="col-sm-4"style="padding:40px;">
				<span class="glyphicon glyphicon-user icon"></span><br>
				<p class="iconInfo"><?php echo $row['cook_info_1'];?></p>
			</div>
			<div class="col-sm-4"style="padding:40px;">
				<span class="glyphicon glyphicon-hourglass icon"></span><br>
				<p class="iconInfo"><?php echo $row['cook_info_2'];?></p>
			</div>
			<div class="col-sm-4"style="padding:40px;">
				<span class="glyphicon glyphicon-fire icon"></span><br>
				<p class="iconInfo"><?php echo $row['cook_info_3'];?></p>
				<?php echo $row['guesses'];?>


			</div>
		</div>
		<div class="row">

			<p id="material">
			<?php
			for($i=1; $i<=$row['guesses']; $i++){
				echo $row['cok_material_nm'. $i].'   |   ';
				echo $row['cok_material_amt'. $i].'<br>';
			}
			?>
			</p>

			<br><br>
			<p id="step">
			<?php
			for($i=1; $i<=$row['guesses2']; $i++){
				echo $row['recipe_step'. $i].'<br>';
			}
			?>
			</p>

			</div>
		</div>
	</div>
	<?php
	// 만약 빠진 부분이 있을 때
   //} else {
     //echo "task option is required";
     //exit;
   //}
	 ?>
	</div>
</div>

</body>

</html>
