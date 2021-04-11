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
<section id="emmet">
	<h1>エメット記載法について</h1>
	<p>かなり便利になりそう</p>
</section>
</body>
</html>