<?php
// TASK 8
$x = 10;
if($x < 20){
    echo 'benar';
}else{
    echo 'salah';
}

// TASK 9
$y = 20;
if($y < 10){
    echo 'Benar';
}else if($y == 20){
    echo 'BINGO';
}else{
    echo 'Salah';
}

// TASK 10
$z = 900;
if($z > 0 && $z < 50){
    echo 'nilai = E';
}else if($z >= 50 && $z < 60){
    echo 'nilai = D';
}else if($z >= 60 && $z < 70){
    echo 'nilai = C';
}else if($z >= 70 && $z < 80){
    echo 'nilai = B';
}else if($z >= 80 && $z < 90){
    echo 'nilai = A';
}else{
    echo 'nilai = A+';
}
?>