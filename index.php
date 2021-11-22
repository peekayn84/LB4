<?php
$result="";
$znak="     ";
$aInt=(int)$_POST['aInt'];
$bInt=(int)$_POST['bInt'];
if ($_POST['+']){
	$znak="  +  ";
	$result=$aInt+$bInt;
}else if ($_POST['-']){
	$znak="  -  ";
	$result=$aInt-$bInt;
}else if ($_POST['*']){
	$znak="  *  ";
	$result=$aInt*$bInt;
}else if ($_POST['/']){
	$znak="  /  ";
	$result=$aInt/$bInt;
}

?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ЛБ 4</title>
  <link href="external.css" rel="stylesheet">
 </head>
 <body>
 <div class="result"><a href="ЛБ4.docx">Отчет</a></div>
<table id="myTable" class="table_dark">
</table><br>
<div class="navigation">
<form action="index.php" method="post">
<a style="margin-left: 50px;">Калькулятор:</a><br>
<input name="aInt" type="text" value="<?php echo $aInt;?>" /><a><?php echo $znak; ?></a><input name="bInt" type="text" value="<?php echo $bInt;?>" /><a> = <?php echo $result;?></a><br>
<input style="margin-left: 110px;" type="radio" name="+"><a>+</a>
<input type="radio" name="-"><a>-</a><br>
<input style="margin-left: 110px;" type="radio" name="/"><a>/</a>
<input type="radio" name="*"><a>*</a>
<br>
<input style="margin-left: 50px;" type="submit" value="Посчитать" />
</form>
</div>
 </body>
</html>
