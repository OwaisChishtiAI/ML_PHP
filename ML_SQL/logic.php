<?php
include "getCalc.php";
$catA = 'A';
$catB = 'B';
$catC = 'C';


$labels = [];
for ($i = 0; $i <= sizeof($avg); $i++){
	if ($avg[$i] <= 30){
		array_push($labels, $catC);
	}
	elseif (($avg[$i] > 30) && ($avg[$i] < 60)) {
		array_push($labels, $catB);
	}
	else {
		array_push($labels, $catA);
	}
}



?>