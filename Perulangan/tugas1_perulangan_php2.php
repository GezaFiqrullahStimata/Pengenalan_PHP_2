
<?php 
echo '<!-- #TASK 1 -->';
for($a=0 ; $a<5; $a++){
    echo "Hello world </br>";
}

echo "<!-- #TASK 2 -->";
echo "<h1>Menggunakan Perulangan For</h1>";
for($b=0 ; $b<5; $b++){
    echo "Hai , Saya urutan ke - ".$b."</br>";
}

echo '<!-- #TASK 3 -->';
$c = 0;
while($c < 5){
$c++;
echo "Hai Dunia </br>";
}

echo '<!-- #TASK 4 -->';
echo "<h1>Menggunakan Perulangan While</h1>";
$d = 0;
while($d < 5){
    $d++;
    echo "Hai,ini Baris ke - ".$d."</br>";
}

echo '<!-- #TASK 5 -->';
$e = 10;
do{
    $e++;
    echo "Hai,Dunia </br>";
}
while($e < 5);
echo 'Jawaban : Karena kondisi didalam while bernilai false (yakni 10 kurang dari 5)
sehingga perintah didalam do , tetap dilakukan minimal sekali

Tetapi jika kondisinya bernilai true,maka perintah looping bisa dijalankan
sesuai inisialisasi nilai awal nya (yakni 0 kurang dari 5)
Contohnya seperti berikut :';
$f = 0;
do{
    $f++;
    echo "Hai,Dunia";
}
while($f < 5)

?>
