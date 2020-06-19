<?php
include "dbConnect.php";
$select_query="SELECT name FROM fridge_tb GROUP BY name";
$result=mysqli_query($dbConnect,$select_query);

//재료 보유량 읽어오기-고기
$query_chicken="SELECT SUM(amount) FROM fridge_tb WHERE name='chicken'";
$result_chicken=mysqli_query($dbConnect,$query_chicken);
$row_chicken = mysqli_fetch_array($result_chicken);
$query_slicedPork="SELECT SUM(amount) FROM fridge_tb WHERE name='slicedPork'";
$result_slicedPork=mysqli_query($dbConnect,$query_slicedPork);
$row_slicedPork = mysqli_fetch_array($result_slicedPork);
$query_porkBelly="SELECT SUM(amount) FROM fridge_tb WHERE name='porkBelly'";
$result_porkBelly=mysqli_query($dbConnect,$query_porkBelly);
$row_porkBelly = mysqli_fetch_array($result_porkBelly);
$query_chickenBreast="SELECT SUM(amount) FROM fridge_tb WHERE name='chickenBreast'";
$result_chickenBreast=mysqli_query($dbConnect,$query_chickenBreast);
$row_chickenBreast = mysqli_fetch_array($result_chickenBreast);
$query_cow="SELECT SUM(amount) FROM fridge_tb WHERE name='cow'";
$result_cow=mysqli_query($dbConnect,$query_cow);
$row_cow = mysqli_fetch_array($result_cow);
//재료 보유량 읽어오기-야채
$query_onion="SELECT SUM(amount) FROM fridge_tb WHERE name='onion'";
$result_onion=mysqli_query($dbConnect,$query_onion);
$row_onion = mysqli_fetch_array($result_onion);
$query_greenOnion="SELECT SUM(amount) FROM fridge_tb WHERE name='greenOnion'";
$result_greenOnion=mysqli_query($dbConnect,$query_greenOnion);
$row_greenOnion = mysqli_fetch_array($result_greenOnion);
$query_potato="SELECT SUM(amount) FROM fridge_tb WHERE name='potato'";
$result_potato=mysqli_query($dbConnect,$query_potato);
$row_potato = mysqli_fetch_array($result_potato);
$query_carrot="SELECT SUM(amount) FROM fridge_tb WHERE name='carrot'";
$result_carrot=mysqli_query($dbConnect,$query_carrot);
$row_carrot = mysqli_fetch_array($result_carrot);
$query_cucumber="SELECT SUM(amount) FROM fridge_tb WHERE name='cucumber'";
$result_cucumber=mysqli_query($dbConnect,$query_cucumber);
$row_cucumber = mysqli_fetch_array($result_cucumber);
$query_butter="SELECT SUM(amount) FROM fridge_tb WHERE name='butter'";
$result_butter=mysqli_query($dbConnect,$query_butter);
$row_butter = mysqli_fetch_array($result_butter);
$query_cheese="SELECT SUM(amount) FROM fridge_tb WHERE name='cheese'";
$result_cheese=mysqli_query($dbConnect,$query_cheese);
$row_cheese = mysqli_fetch_array($result_cheese);
//재료 보유량 읽어오기-유제품
$query_pizzaCheese="SELECT SUM(amount) FROM fridge_tb WHERE name='pizzaCheese'";
$result_pizzaCheese=mysqli_query($dbConnect,$query_pizzaCheese);
$row_pizzaCheese = mysqli_fetch_array($result_pizzaCheese);
$query_milk="SELECT SUM(amount) FROM fridge_tb WHERE name='milk'";
$result_milk=mysqli_query($dbConnect,$query_milk);
$row_milk = mysqli_fetch_array($result_milk);
$query_egg="SELECT SUM(amount) FROM fridge_tb WHERE name='egg'";
$result_egg=mysqli_query($dbConnect,$query_egg);
$row_egg = mysqli_fetch_array($result_egg);
$query_butter="SELECT SUM(amount) FROM fridge_tb WHERE name='butter'";
$result_butter=mysqli_query($dbConnect,$query_butter);
$row_butter = mysqli_fetch_array($result_butter);
$query_cheese="SELECT SUM(amount) FROM fridge_tb WHERE name='cheese'";
$result_cheese=mysqli_query($dbConnect,$query_cheese);
$row_cheese = mysqli_fetch_array($result_cheese);
//재료 보유량 읽어오기-물고기
$query_mackerel="SELECT SUM(amount) FROM fridge_tb WHERE name='mackerel'";
$result_mackerel=mysqli_query($dbConnect,$query_mackerel);
$row_mackerel = mysqli_fetch_array($result_mackerel);
$query_shrimp="SELECT SUM(amount) FROM fridge_tb WHERE name='shrimp'";
$result_shrimp=mysqli_query($dbConnect,$query_shrimp);
$row_shrimp = mysqli_fetch_array($result_shrimp);

mysqli_close($dbConnect);
?>

<!DOCTYPE html>
<html>

	<head>

		<meta name="viewport" content="width=device-width, intial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="owl.carousel.min.css">
		<link rel="stylesheet" href="owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="04MyFridge.css">

	</head>


	<body>

		<nav class="navba navbar-collapse">
			<div id="header" class="container-fluid">
				<ul>
					<li><a href="#">INFO</a></li>
					<li><a href="02Login.html">LOGOUT</a></li>
					<li><a href="03SignUp.html">MY PAGE</a></li>
				</ul>

				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</div>
		</nav>

		<div id="nav" class="container-fluid">
			<h1 class="h2">MY FRIDGE</h1>
		</div>


		<div id="fridge">

		<div id="content" class="container-fluid">
			<div class="category" style="background-color:lightpink"><h2 style="display: inline; margin-right: 10px">Meat</h2>
				<input type="text" id="kind" name="kind" style="display:none" value="kind_null"/>
				<input type="text" id="name" name="name" style="display:none" value="name_null"/>
				<img class="btn_add" src="plus.png"  onclick="add_meat();"></div>
				<!-- Wrapper for slides -->
				<div class="wrapper">
            <div class="owl-carousel owl-theme">
                <div class="item"><img id="chicken" src="chicken2.jpg" onclick="delete_chicken();" title="치킨이 <?php if($row_chicken[0]>=1)print_r($row_chicken[0]);else echo '0'?>개 있습니다"></div>
                <div class="item"><img id="slicedPork" src="slicedPork2.jpg" onclick="delete_slicedPork();" title="대패가 <?php if($row_slicedPork[0]>=1)print_r($row_slicedPork[0]);else echo '0'?>개 있습니다"></div>
                <div class="item"><img id="porkBelly" src="porkBelly2.jpg" onclick="delete_porkBelly();" title="삼겹살이 <?php if($row_porkBelly[0]>=1)print_r($row_porkBelly[0]);else echo '0'?>개 있습니다"></div>
								<div class="item"><img id="chickenBreast" src="chickenBreast2.jpg" onclick="delete_chickenBreast();" title="닭가슴살이 <?php if($row_chickenBreast[0]>=1)print_r($row_chickenBreast[0]);else echo '0'?>개 있습니다"></div>
								<div class="item"><img id="cow" src="cow2.jpg" onclick="delete_cow();" title="소고기가 <?php if($row_cow[0]>=1)print_r($row_cow[0]);else echo '0'?>개 있습니다"></div>
            </div>
        </div>

			<div class="category" style="background-color:lightgreen"><h2 style="display: inline; margin-right: 10px">Vegetable</h2><img class="btn_add" src="plus.png" onclick="add_vegetable();"></div>
				<!-- Wrapper for slides -->
				<div class="wrapper">
		       <div class="owl-carousel owl-theme">
	         			<div class="item"><img id="onion" src="onion2.jpg" onclick="delete_onion();" title="양파가 <?php if($row_onion[0]>=1)print_r($row_onion[0]);else echo '0'?>개 있습니다"></div>
	              <div class="item"><img id="greenOnion" src="greenOnion2.jpg" onclick="delete_greenOnion();" title="파가 <?php if($row_greenOnion[0]>=1)print_r($row_greenOnion[0]);else echo '0'?>개 있습니다"></div>
	              <div class="item"><img id="potato" src="potato2.jpg" onclick="delete_potato();" title="감자가 <?php if($row_potato[0]>=1)print_r($row_potato[0]);else echo '0'?>개 있습니다"></div>
								<div class="item"><img id="carrot" src="carrot2.jpg" onclick="delete_carrot();" title="당근이 <?php if($row_carrot[0]>=1)print_r($row_carrot[0]);else echo '0'?>개 있습니다"></div>
								<div class="item"><img id="cucumber" src="cucumber2.jpg" onclick="delete_cucumber();" title="오이가 <?php if($row_cucumber[0]>=1)print_r($row_cucumber[0]);else echo '0'?>개 있습니다"></div>
	         </div>
	      </div>


			<div class="category" style="background-color:lightyellow"><h2 style="display: inline; margin-right: 10px">Eggs & Dairy products</h2><img class="btn_add" src="plus.png" onclick="add_eggs();"></div>
				<!-- Wrapper for slides -->
				<div class="wrapper">
		    		<div class="owl-carousel owl-theme">
							<div class="item"><img id="pizzaCheese" src="pizzaCheese2.jpg" onclick="delete_pizzaCheese();" title="피자치즈가 <?php if($row_pizzaCheese[0]>=1)print_r($row_pizzaCheese[0]);else echo '0'?>개 있습니다"></div>
		        	<div class="item"><img id="milk" src="milk2.jpg" onclick="delete_milk();" title="우유가 <?php if($row_milk[0]>=1)print_r($row_milk[0]);else echo '0'?>개 있습니다"></div>
		          <div class="item"><img id="egg" src="egg2.jpg" onclick="delete_egg();" title="계란이 <?php if($row_egg[0]>=1)print_r($row_egg[0]);else echo '0'?>개 있습니다"></div>
							<div class="item"><img id="butter" src="butter2.jpg" onclick="delete_butter();" title="버터가 <?php if($row_butter[0]>=1)print_r($row_butter[0]);else echo '0'?>개 있습니다"></div>
							<div class="item"><img id="cheese" src="cheese2.jpg" onclick="delete_cheese();" title="체다치즈가 <?php if($row_cheese[0]>=1)print_r($row_cheese[0]);else echo '0'?>개 있습니다"></div>
		      	</div>
		    </div>

			<div class="category" style="background-color:lightblue"><h2 style="display: inline; margin-right: 10px">Fish</h2><img class="btn_add" src="plus.png" onclick="add_fish();"></div>
				<!-- Wrapper for slides -->
				<div class="wrapper">
						<div class="owl-carousel owl-theme">
							<div class="item"><img id="mackerel" src="mackerel2.jpg" onclick="delete_mackerel();" title="고등어가 <?php if($row_mackerel[0]>=1)print_r($row_mackerel[0]);else echo '0'?>개 있습니다"></div>
							<div class="item"><img id="shrimp" src="shrimp2.jpg" onclick="delete_shrimp();" title="새우가 <?php if($row_shrimp[0]>=1)print_r($row_shrimp[0]);else echo '0'?>개 있습니다"></div>
							<div class="item"><img id="kim" src="kim2.jpg" onclick="delete_kim();" title="김이 <?php if($row_kim[0]>=1)print_r($row_kim[0]);else echo '0'?>개 있습니다"></div>
							<div class="item"><img id="tuna" src="tuna2.jpg" onclick="delete_tuna();" title="참치가 <?php if($row_tuna[0]>=1)print_r($row_tuna[0]);else echo '0'?>개 있습니다"></div>
							<div class="item"><img id="seaweed" src="seaweed2.jpg" onclick="delete_seaweed();" title="미역이 <?php if($row_seaweed[0]>=1)print_r($row_seaweed[0]);else echo '0'?>개 있습니다"></div>
						</div>
				</div>

				<?php
				while($row = mysqli_fetch_assoc($result)) {
					echo '<script>document.getElementById("'.$row[name].'").src="'.$row[name].'.jpg";</script>';
					echo '<style>
					#'.$row[name].'{
						transition: transform .3s;
					}
					#'.$row[name].':hover{
						-ms-transform: scale(2.1);
						-webkit-transform: scale(1.1);
		 				transform: scale(1.1);
						}
						</style>';
				}
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
		<script type="text/javascript" src="script_myfridge.js"></script>
	</body>


</html>
