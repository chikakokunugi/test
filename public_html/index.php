<?php

	$string = file_get_contents("sample.html");
	
	$pattern = '/<img.*?">/';
	
	preg_match_all($pattern, $string , $match);
	
foreach($match[0] as $value){
print "$value";} 

そしてもう一度テスト