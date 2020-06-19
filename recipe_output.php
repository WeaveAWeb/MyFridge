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
  <script>
  <!--이미지 첨부하기-->
		 function previewImage(targetObj, View_area) {
			var preview = document.getElementById(View_area); //div id
			var ua = window.navigator.userAgent;

		  //ie일때(IE8 이하에서만 작동)
			if (ua.indexOf("MSIE") > -1) {
				targetObj.select();
				try {
					var src = document.selection.createRange().text; // get file full path(IE9, IE10에서 사용 불가)
					var ie_preview_error = document.getElementById("ie_preview_error_" + View_area);


					if (ie_preview_error) {
						preview.removeChild(ie_preview_error); //error가 있으면 delete
					}

					var img = document.getElementById(View_area); //이미지가 뿌려질 곳

					//이미지 로딩, sizingMethod는 div에 맞춰서 사이즈를 자동조절 하는 역할
					img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')";
				} catch (e) {
					if (!document.getElementById("ie_preview_error_" + View_area)) {
						var info = document.createElement("<p>");
						info.id = "ie_preview_error_" + View_area;
						info.innerHTML = e.name;
						preview.insertBefore(info, null);
					}
				}
		  //ie가 아닐때(크롬, 사파리, FF)
			} else {
				var files = targetObj.files;
				for ( var i = 0; i < files.length; i++) {
					var file = files[i];
					var imageType = /image.*/; //이미지 파일일경우만.. 뿌려준다.
					if (!file.type.match(imageType))
						continue;
					var prevImg = document.getElementById("prev_" + View_area); //이전에 미리보기가 있다면 삭제
					if (prevImg) {
						preview.removeChild(prevImg);
					}
					var img = document.createElement("img");
					img.id = "prev_" + View_area;
					img.classList.add("obj");
					img.file = file;
					img.style.width = '300px';
					img.style.height = '300px';
					preview.appendChild(img);
					if (window.FileReader) { // FireFox, Chrome, Opera 확인.
						var reader = new FileReader();
						reader.onloadend = (function(aImg) {
							return function(e) {
								aImg.src = e.target.result;
							};
						})(img);
						reader.readAsDataURL(file);
					} else { // safari is not supported FileReader
						//alert('not supported FileReader');
						if (!document.getElementById("sfr_preview_error_"
								+ View_area)) {
							var info = document.createElement("p");
							info.id = "sfr_preview_error_" + View_area;
							info.innerHTML = "not supported FileReader";
							preview.insertBefore(info, null);
						}
					}
				}
			}
		}
		</script>
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
</div>
</div>
</body>
</html>
 