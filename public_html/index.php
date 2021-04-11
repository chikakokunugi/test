<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$string = file_get_contents("sample.html");
	
	$pattern = '/<img.*?">/';
	
	preg_match_all($pattern, $string , $match);
	
foreach($match[0] as $value){
print "$value";} 

?>
<style>.f-container{
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: flex-start;
	-webkit-flex-wrap: wrap;
	-moz-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	-o-flex-wrap: wrap;
	flex-wrap: wrap;
	}</style>
<div class="f-container">
	<div class="f-item"></div>
	<div class="f-item"></div>
	<div class="f-item"></div>
</div>
</body>
</html>