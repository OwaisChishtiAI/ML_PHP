<?php
$csvFile = file('GPS_DATA.csv');
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line);
    }
//echo '<pre>'; print_r($data); echo '</pre>';
//echo $data[1][3];
//echo "Size of Data" . ": " . sizeof($data);

$spd = [];
for ($i = 0 ; $i <= sizeof($data)-1 ; $i++){
	array_push($spd, $data[$i][3]);
}

unset($spd[0]);
/*for ($j = 1 ; $j <= sizeof($data)-1 ; $j++){
	echo $spd[$j];
	echo "<br>";
}*/

$avg = [];
$min = [];
$max = [];

//print_r(array_chunk($spd, 10));
$slices = array_chunk($spd, 10);
//print_r ($slices);
//echo sizeof($slices); == 50;
//echo "<br>";
//echo array_sum($slices[0]);
//print_r ($slices[0][0]);
for ($x = 0 ; $x <= sizeof($slices)-1 ; $x++){
	$avgCalc = array_sum($slices[$x]) / 10;
	array_push($avg, $avgCalc);

	$minCalc = min($slices[$x]);
	array_push($min, $minCalc);

	$maxCalc = max($slices[$x]);
	array_push($max, $maxCalc);
}
echo "<h2>Array View</h2>";
echo "<br>";
echo "Averages";
echo "<br>";
echo "--------";
echo "<br>";
print_r ($avg);
echo "<br>";
echo "<br>";
echo "Minimum";
echo "<br>";
echo "-------";
echo "<br>";
print_r ($min);
echo "<br>";
echo "<br>";
echo "Maximum";
echo "<br>";
echo "-------";
echo "<br>";
print_r ($max);

?>