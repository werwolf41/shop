<?php 
$arr = [1,1,2,3,2,3];
var_dump($arr);

$min[] = $arr[0];
$minindex[]=0;

$max[] = $arr[0];
$maxindex[]=0;

for($i=1; $i<count($arr); $i++){
   	if($arr[$i]<$min[0]){
		unset($min);
		unset($minindex)
		$min[0] = $arr[$i];
		$minindex[0] = $i;
   	}else if($arr[$i]==$min[0]){
		$min[] = $arr[$i];
		$minindex[] = $i;
   	}

	if($arr[$i]<$min[0])){
    	unset($min);
       	unset($minindex)
		$min[0] = $arr[$i];
		$minindex[0] = $i;
   	}else if($arr[$i]==$min[0]){
		$min[] = $arr[$i];
		$minindex[] = $i;
   	}
}

for ($i=0; $i<count($min); $i++){
	if(!isset($max[$i])){
		break;
	}

	$arr[$maxindex[$i]] = $min[$i];
	$arr[$minindex[$i]] = $max[$i];
}

var_dump($arr);