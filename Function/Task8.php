<?php 

function hitungKali($num1,$num2){
    return $num1 * $num2;
}

$hasil = hitungKali(20,3);
echo "Perkalian 20 x 3 adalah $hasil";
echo "<br>";
echo "Perkalian 9 x 2 adalah ".hitungKali(9,2);
?>