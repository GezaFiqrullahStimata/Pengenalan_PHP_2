<?php
$mahasiswa = [
    [
        "nama"=>"Geza Fiqrullah",
        "nim"=>"21510013",
        "email"=>"gezayu@gmail.com",
        "jurusan"=>"SISTEM INFORMASI",
        "gambar"=>"geza.jpg",
    ],
    [
        "nama"=>"Nayeon",
        "nim"=>"21510014",
        "email"=>"nayeon@gmail.com",
        "jurusan"=>"TEKNOLOGI INFORMASI",
        "gambar"=>"nayeon.jpg",
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
        <li>
            <a href="latihan3.php?nama=<?= $mhs["nama"];?>&nim=<?= $mhs["nim"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
