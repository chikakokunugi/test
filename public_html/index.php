<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	
	<?php

	$string = file_get_contents("test.html");
	
	$pattern = '/<img.*?">/';
	
	preg_match_all($pattern, $string , $match);
	
foreach($match[0] as $value){
print "$value";} 

?>

</body>
</html>