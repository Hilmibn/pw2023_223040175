<?php
$nama_depan ="Hilmi";
$nama_belakang ="Anugrah";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2a</title>
</head>
<body>
    <?php for ($i =1; $i<= 100; $i++):?>
        <?php if($i %3==0 && $i %5==0): ?>
            <?= $nama_depan .' '. $nama_belakang; ?><br>
        <?php elseif ($i %3==0): ?>
            <?= $nama_depan; ?><br>
            <?php elseif ($i %5==0): ?> 
            <?= $nama_belakang; ?><br>
            <?php else: ?>
            <?= $i ; ?><br>
        <?php endif?> 
    <?php endfor ?>
</body>
</html>