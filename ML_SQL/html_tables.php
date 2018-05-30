<?php
include 'getCalc.php';
include 'logic.php';
echo "<br>";
echo "<br>";
echo "<h2>Tabular View</h2> (scroll down to see other tables.)";
echo "<br>";
echo "<br>";

echo '<table border="1">';
echo "Averages";
for($i = 0; $i < count($avg); $i++ ){
    echo '<tr>';
    for($j = 0; $j < count($avg[$i]); $j++ ){
        echo '<td>'.$avg[$i].'</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo "<br>";echo "<br>";

echo '<table border="1" float: left;>';
echo "Minimums";
for($i = 0; $i < count($min); $i++ ){
    echo '<tr>';
    for($j = 0; $j < count($min[$i]); $j++ ){
        echo '<td>'.$min[$i].'</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo "<br>";echo "<br>";

echo '<table border="1" float: left;>';
echo "Maximums";
for($i = 0; $i < count($max); $i++ ){
    echo '<tr>';
    for($j = 0; $j < count($max[$i]); $j++ ){
        echo '<td>'.$max[$i].'</td>';
    }
    echo '</tr>';
}
echo '</table>';


echo "<br>";echo "<br>";
echo '<table border="1" float: left;>';
echo "Labels";
for($i = 0; $i < count($labels); $i++ ){
    echo '<tr>';
    for($j = 0; $j < count($labels[$i]); $j++ ){
        echo '<td>'.$labels[$i].'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>