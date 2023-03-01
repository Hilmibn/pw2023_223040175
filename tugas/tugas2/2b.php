<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2b</title>
</head>
<body>
    <?php for ($i =1; $i<= 10; $i++):?>
        <?php for ($angka =1; $angka<$i; $angka++): ?>
            <?= $angka; ?>
        <?php endfor ?>
            <?= $i ."<br>"; ?>
    <?php endfor  ?>
</body>
</html>