<?php
$x=0;
$y=4;
if($x>0 && $y>0){
    $katta=max($x, $y);
    $katta=$katta **2;
    echo $katta ;
   
}
elseif($x<0 && $y<0){
    $i= ($x*$x) + ($y*$y);
    echo sqrt($i);
}
elseif($x<0 && $y>0){
    echo  $x + $y;
}


?>
