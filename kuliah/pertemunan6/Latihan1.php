<?php 
$makanan= ['🍕','🍔','🥪','🥩','🍛'];
$binatang = ['😽','🦮','👹','👽','🦓'];
$mahasiswa = ['Anugrah', 'Bela', 'Negara', 'hayde', 'Haydir'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>


    <?php foreach($makanan as $key => $mk) { ?>
    <ul>
 
        <li> Nama : <?= $mahasiswa[$key]; ?></li>
        <li>Makanan Favorit : <?= $mk; ?></li>
        <li>Peliharaan : <?= $binatang[$key]; ?></li>
    </ul>
<?php } ?>



</body>
</html>