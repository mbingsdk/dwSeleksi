<?php

function valid($arr,$str){
	$jm = count($arr);
	for($i = 0; $i < $jm; $i++){
		if(strpos($str, $arr[$i]) !== false){
			$r = "True";
		}else{
			$r = "False";
		}
		$res[] = $arr[$i]." => ".$r;
	}

	return join("\n",$res);
}

$arry = ['saya','pernah','ganteng','gaes'];
print_r(valid($arry,"sayaganteng"))

?>
