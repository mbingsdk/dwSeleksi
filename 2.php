<?php
function tugas2($str){
  for($i=1;$i<=count($str)/2;$i++){
    $ck[] = str_repeat("= ",$i-1).$str[$i-1].str_repeat(" =",count($str)-$i*2)." ".$str[$i-1].str_repeat(" =",$i-1);

    $x=count($str)/2+$i;
    $ck2[] = str_repeat("= ",count($str)-$x).$str[$x-1].str_repeat(" =",($x-count($str)/2-1)*2)." ".$str[$x-1].str_repeat(" =",count($str)-$x);
  }
  return join("\n",$ck)."\n".join("\n",$ck2);
}

$string = ['D','U','M','B','W','A','Y','S','I','D'];
print_r(tugas2($string));
?>
