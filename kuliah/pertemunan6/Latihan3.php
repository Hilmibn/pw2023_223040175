<?php 

// ARRAY ASSOCIATIVE
// adalah array indexnya string yang kita buat sendiri
$mahasiswa=[['nama'=>'Hilmi',
            'binatang'=>'🦍',
            'makanan'=>'🥙'], 
            
            ['nama'=>'Anugrah',
            'binatang'=>'🦓',
            'makanan'=>'🍛'], 
            
            ['nama'=>'Bela',
            'binatang'=>'👽',
            'makanan'=>'🥩'], 
           
            ['nama'=>'Haydir',
            'binatang'=>'🦮',
            'makanan'=>'🍔'],
            
            ['nama'=>'Misbah',
            'binatang'=> '😽',
            'makanan'=>'🍕']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>


    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li> Nama : <?= $m['nama'] ; ?></li>
        <li>Makanan Favorit : <?= $m['makanan']; ?></li>
        <li>Peliharaan : <?= $m['binatang']; ?></li>
      
    </ul>
<?php } ?>



</body>
</html>