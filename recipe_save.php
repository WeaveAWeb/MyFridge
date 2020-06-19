<!--DB 테이블에 추가하기-->
<?php
include "recipe_dbConnect.php";

$Cook_Title=$_POST['Cook_Title'];
$Cook_info=$_POST['Cook_info'];
$cook_cag_1=$_POST['cook_cag_1'];
$cook_cag_2=$_POST['cook_cag_2'];
$cook_info_1=$_POST['cook_info_1'];
$cook_info_2=$_POST['cook_info_2'];
$cook_info_3=$_POST['cook_info_3'];
$guesses=$_POST['guesses'];
$cok_material_nm1=$_POST['cok_material_nm1'];
$cok_material_amt1=$_POST['cok_material_amt1'];
$cok_material_nm2=$_POST['cok_material_nm2'];
$cok_material_amt2=$_POST['cok_material_amt2'];
$cok_material_nm3=$_POST['cok_material_nm3'];
$cok_material_amt3=$_POST['cok_material_amt3'];
$cok_material_nm4=$_POST['cok_material_nm4'];
$cok_material_amt4=$_POST['cok_material_amt4'];
$cok_material_nm5=$_POST['cok_material_nm5'];
$cok_material_amt5=$_POST['cok_material_amt5'];
$guesses2=$_POST['guesses2'];
$recipe_step1=$_POST['recipe_step1'];
$recipe_step2=$_POST['recipe_step2'];
$recipe_step3=$_POST['recipe_step3'];
$recipe_step4=$_POST['recipe_step4'];
$recipe_step5=$_POST['recipe_step5'];
$recipe_step6=$_POST['recipe_step6'];
$recipe_step7=$_POST['recipe_step7'];
$recipe_step8=$_POST['recipe_step8'];
$recipe_step9=$_POST['recipe_step9'];

 $sql = "insert into testTable (Cook_Title, Cook_info, cook_cag_1, cook_cag_2, cook_info_1, cook_info_2, cook_info_3, guesses, cok_material_nm1,cok_material_amt1, cok_material_nm2, cok_material_amt2, cok_material_nm3,cok_material_amt3, cok_material_nm4,cok_material_amt4, cok_material_nm5,cok_material_amt5,  guesses2, recipe_step1, recipe_step2, recipe_step3, recipe_step4, recipe_step5, recipe_step6, recipe_step7, recipe_step8, recipe_step9)";
 
 $sql = $sql. "values('$Cook_Title', '$Cook_info', '$cook_cag_1', '$cook_cag_2', '$cook_info_1', '$cook_info_2', '$cook_info_3', '$guesses', '$cok_material_nm1','$cok_material_amt1', '$cok_material_nm2', '$cok_material_amt2', '$cok_material_nm3','$cok_material_amt3', '$cok_material_nm4','$cok_material_amt4', '$cok_material_nm5','$cok_material_amt5', '$guesses2', '$recipe_step1', '$recipe_step2', '$recipe_step3', '$recipe_step4', '$recipe_step5', '$recipe_step6', '$recipe_step7', '$recipe_step8', '$recipe_step9')";
 if($dbConnect->query($sql)){
  echo "<script>location.replace('05RecipeRoom.html'); alert(\"Recipe registration successful\");</script>";
 }else{
  echo 'fail to insert sql';
 }


?>