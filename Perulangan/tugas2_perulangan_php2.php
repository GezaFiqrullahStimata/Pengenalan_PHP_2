<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Membuat Perulangan Tabel</h2>
    <table border="1" cellpaadding = "10" cellspacing ="1">
     <!-- #TASK 6 -->
        <!-- <?php
            for($u = 1;$u <= 3;$u++){
                echo "<tr>";
                for($i = 1; $i <= 5; $i++){
                    echo "<td> $u , $i </td>";
                }
                echo "</tr>";
            } 
        ?> -->

    <!-- #TASK 7 -->
        <?php
            for($u = 1;$u <= 10;$u++){
                echo "<tr>";
                for($i = 1; $i <= 8; $i++){
                    echo "<td> $u , $i </td>";
                }
                echo "</tr>";
            } 
        ?>
    </table>
</body>
</html>