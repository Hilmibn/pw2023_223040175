<?php 
$nama1 = 'Hilmi Anugrah Bela Negara'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendahuluan PHP</title>
    <style>
        table{
            width:700px;
        }
    </style>
</head>
<body>
    <h1>
        <?php echo "Hallo $nama1!" ; ?>
    </h1>
        
    <p> 
        <?php echo  '"PENGUMUMAN" : Sekarang hari jum\'at'; ?> 
    </p>
    <p> 
        <?php echo 10+10;?>
    </p>

<form action="">
    <label for="npm">NPM</label>
    <input type="number" name="npm" id="npm">

    <label for="nama">Nama</label>
    <input type="nama" name="nama" id="nama">

    <label for="alamat">Alamat</label>
    <input type="alamat" name="alamat" id="alamat">

    <button type="submit">Kirim</button>
    </form>


<?php 
$npm = @$_GET['npm'];
$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];


?>
<br><br>
<?php

if ($npm) {
    echo "<strong>NPM:</strong> {$npm} <br>";
}
if ($nama) {
    echo "<strong>Nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}
?>

<table style="margin-top:20px;"cellspacing="0px" border="1px solid black" cellpadding="">
    
    <tr bgcolor="yellow" style="font-family:poppins; font-size:18px;">
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
    <tr>
        <td style="text-transform:uppercase; padding:10px 15px 10px 15px;">
            <?php
                if ($npm) {
                    echo "<strong>{$npm}</strong><br>";
                }
            ?>
        </td>
        <td style="text-transform:uppercase; padding:10px 15px 10px 15px;">
        <?php
                if ($nama) {
                    echo "<strong>{$nama}</strong><br>";
                }
            ?>
        </td>
        <td style="text-transform:uppercase; padding:10px 15px 10px 15px;">
        <?php
                if ($alamat) {
                    echo "<strong>{$alamat}</strong><br>";
                }
            ?>    
        </td>
    </tr>
    
    

</table>


</body>
</html>