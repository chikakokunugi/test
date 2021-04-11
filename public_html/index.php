<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!--
	<　?php

	$string = file_get_contents("sample.html");
	
	$pattern = '/<img.*?">/';
	
	preg_match_all($pattern, $string , $match);
	
foreach($match[0] as $value){
print "$value";} 

?>
-->
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
	}
	
	.f-item {
		width: calc(100% / 3);
		height: 500px;
		background-color: hotpink;
		border: solid 10px #fff;
		box-sizing: border-box;
		color: aqua;
	}</style>
<div class="f-container">
	<div class="f-item">
		<p>いい感じ</p>
	</div>
	<div class="f-item">
		<p>いい感じ</p>
	</div>
	<div class="f-item">
		<p>いい感じ</p>
	</div>
</div>
</body>
</html>