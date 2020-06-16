<!--process2.php-->
<?php
	include "recipe_dbConnect.php";
	mysqli_set_charset($dbConnect,"utf8");
	$result = mysqli_query($dbConnect,"SELECT * FROM testtable");

 $row = mysqli_fetch_array($result);
   // $Cook_Title = isset($_POST['Cook_Title']) ? $_POST['Cook_Title'] : false;
   // $Cook_info = isset($_POST['Cook_info']) ? $_POST['Cook_info'] : false;
   //$cook_cag_1 = isset($_POST['cook_cag_1']) ? $_POST['cook_cag_1'] : false;
   $cook_cag_2 = isset($_POST['cook_cag_2']) ? $_POST['cook_cag_2'] : false;
   $cook_info_1 = isset($_POST['cook_info_1']) ? $_POST['cook_info_1'] : false;
   $cook_info_2 = isset($_POST['cook_info_2']) ? $_POST['cook_info_2'] : false;
   $cook_info_3 = isset($_POST['cook_info_3']) ? $_POST['cook_info_3'] : false;
   
   $cook_info_3 = isset($_POST['cook_info_3']) ? $_POST['cook_info_3'] : false;
   
   $guesses = isset($_POST['guesses']) ? $_POST['guesses'] : false;
   $guesses2 = isset($_POST['guesses2']) ? $_POST['guesses2'] : false;
   
   $cok_material_nm1 = isset($_POST['cok_material_nm1']) ? $_POST['cok_material_nm1'] : false;
   $cok_material_amt1 = isset($_POST['cok_material_amt1']) ? $_POST['cok_material_amt1'] : false;
   $cok_material_nm2 = isset($_POST['cok_material_nm2']) ? $_POST['cok_material_nm2'] : false;
   $cok_material_amt2 = isset($_POST['cok_material_amt2']) ? $_POST['cok_material_amt2'] : false;
   $cok_material_nm3 = isset($_POST['cok_material_nm3']) ? $_POST['cok_material_nm3'] : false;
   $cok_material_amt3 = isset($_POST['cok_material_amt3']) ? $_POST['cok_material_amt3'] : false;
   $cok_material_nm4 = isset($_POST['cok_material_nm4']) ? $_POST['cok_material_nm4'] : false;
   $cok_material_amt4 = isset($_POST['cok_material_amt4']) ? $_POST['cok_material_amt4'] : false;
   
   $recipe_step1 = isset($_POST['recipe_step1']) ? $_POST['recipe_step1'] : false;
   $recipe_step2 = isset($_POST['recipe_step2']) ? $_POST['recipe_step2'] : false;
   $recipe_step3 = isset($_POST['recipe_step3']) ? $_POST['recipe_step3'] : false;
   $recipe_step4 = isset($_POST['recipe_step4']) ? $_POST['recipe_step4'] : false;
   $recipe_step5 = isset($_POST['recipe_step5']) ? $_POST['recipe_step5'] : false;
   $recipe_step6 = isset($_POST['recipe_step5']) ? $_POST['recipe_step5'] : false;
   $recipe_step7 = isset($_POST['recipe_step5']) ? $_POST['recipe_step5'] : false;
   
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
 <style>
			#title{
				display: inline;
			}
			
			ul{
				display: inline;
				
				margin: 0px;
			}
			
			ul li{
				display: inline;
			}
			
			.icon {
				font-size:50px;
				color:#9ACD32;
			}
		
			#header ul{
				float: right;
				line-height: 40px;
			}
			
			#header ul li a{
				color: rgb(127, 127, 127);
				font-size: 20px;
				text-decoration: none;
				font-weight: bold;
				
				padding: 15px;
				margin: 5px;
			}
			
			#header ul li a:hover{
				color: black;
				background-color: rgb(242, 242, 242);
			}	
			
			#nav ul li a{
				color: white;
				font-size: large;
				text-decoration: none;
				font-weight: bold;
				
				margin: 0px 40px 0px 0px;
			}
			
			#nav ul li a:hover{
				text-decoration: underline;
			}
			
			#contents_title{
				letter-spacing: 8px;
			}
			
			#header{
				background-color: rgb(208, 206, 206); 
				letter-spacing: 4px;
				
				padding: 35px 35px 35px 35px;
				margin: 0px;
			}
			
			#nav{
				background-color: rgb(127, 127, 127);
				letter-spacing: 4px;
				
				padding: 20px 20px 20px 20px;
				text-align: center;
			}
			
			#contents{
				background-color: rgb(242, 242, 242); 
				text-align:center;
				padding: 20px 0px 10px 0px;
				margin: 15px 15px 15px 15px;
	#BtnSave{
			text-align:center;
			position:fixed;
			top : 600px;
			right : 10px;
			background-color: #90EE90;
	}
	</style>
</head>
<body>
	<!--로고&네비게이션바-->
	<div id="header" class="container-fluid">
      
         <h1 id="title">자취방 냉장고</h1>
         
         <ul>
            <li><a href="#">사용가이드</a></li>
            <li><a href="#">마이페이지</a></li>
            <li><a href="#">로그아웃</a></li>
         </ul>
         
      </div>
		
		
		<div id="nav" class="container-fluid">
			<ul>
				<li><a href="MyFridge1.html">내 냉장고</a></li>
				<li><a href="Shopping.html">장보기</a></li>
				<li><a href="AddRecipe.html">요리 업로드</a></li>
				<li><a href="#">요리 둘러보기</a></li>
			</ul>
		</div>
	<div id="contents" class="container-fluid">
	<div class="row bg-grey">
   <?php
   //if ($Cook_Title&&$Cook_info&&cook_cag_1&&cook_cag_2&&cook_cag_3) {
    ?> 
	<h1><?php echo $row['Cook_Title']; ?> </h1>
	  <!--이미지 삽입 추가해야 함-->
	<p><?php echo $row['Cook_info'];?><br>카테고리 : <?php echo $row['cook_cag_1'];?><span style="color:#9ACD32;font-size:20px;"><b> | </b></span> <?php echo $row['cook_cag_2'];?></p>
	<div class="container-fluid" style="text-align:center">
		<div class="row">
			<div class="col-sm-4"style="padding:40px;">
				<span class="glyphicon glyphicon-user icon"></span><br>
				<?php echo $row['cook_info_1'];?>
			</div>
			<div class="col-sm-4"style="padding:40px;">
				<span class="glyphicon glyphicon-hourglass icon"></span><br>
				<?php echo $row['cook_info_2'];?>
			</div>
			<div class="col-sm-4"style="padding:40px;">
				<span class="glyphicon glyphicon-fire icon"></span><br>
				<?php echo $row['cook_info_3'];?>
				<?php echo $row['guesses'];?>
				
				
			</div>
		</div>
		<div class="row">
				
			<?php
			for($i=1; $i<=$row['guesses']; $i++){ 
				echo $row['cok_material_nm'. $i].'   |   '; 
				echo $row['cok_material_amt'. $i].'<br>';
			}	
			?>
			
			<br><br>
			<?php
			for($i=1; $i<=$row['guesses2']; $i++){ 
				echo $row['recipe_step'. $i].'<br>';
			}	
			?>

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
 