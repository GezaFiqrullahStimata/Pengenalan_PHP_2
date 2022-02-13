<?php
echo "<b>OPERATOR PERBANDINGAN</b></br>var_dump(1 < 5) adalah </br>";
var_dump(1 < 5);

echo "</br> </br> var_dump(1 > 5) adalah </br>";
var_dump(1 > 5);

echo "</br> </br> var_dump(1 <= 5) adalah </br>";
var_dump(1 <= 5);

echo "</br> </br> var_dump(1 >= 5) adalah </br>";
var_dump(1 >= 5);

echo "</br> </br> var_dump(1 < 5) adalah </br>";
var_dump(1 == 5);

echo "</br> </br> var_dump(1 < 5) adalah </br>";
var_dump(1 != 5);

echo "</br></br><b>OPERATOR IDENTITAS</b></br>var_dump(1 === '1') adalah </br>";
var_dump(1 === 5);

echo "</br> </br> var_dump(1 !== '1') adalah </br>";
var_dump(1 != 5);

$x = 10;
echo "</br></br><b>OPERATOR LOGIKA</b></br>var_dump($x < 20 && $x % 2 == 0) adalah </br>";
var_dump($x < 20 && $x % 2 == 0);
?>