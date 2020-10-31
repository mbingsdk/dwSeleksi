<?php
function tugas2($var){
	$jm = count($var);
	$a = "";
	for($i = 0; $i < $jm; $i++){
		if($i > 0){
			$a = str_repeat("= ",$i);
		}
		$res[] = $a . $var[$i];
	}
	return join("\n",$res);
}

$string = ['D','U','M','B','W','A','Y','S','I','D'];
echo tugas2($string);
?>
