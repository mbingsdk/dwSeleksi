<?php
function tugas1($var){
	$spl = explode(" ", $var);
	$jum = count($spl);
	for($i = 1; $i <= $jum; $i++){
		for ($u = 0; $u < $jum; $u++) { 
			$x = preg_replace("/[^0-9]/", "", $spl[$u]);
			if($x == $i){
				$res[] = $spl[$u];
			}
		}
	}
	return join(" ", $res);
}

$str = "ming3gu k7ota Pa1da a5yah ha2ri k6e kutu4rut";
print_r(tugas1($str));
?>
