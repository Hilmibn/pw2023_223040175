<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2c</title>
    <style>
        .box{
            width: 50px;
            height: 50px;
            background-color:salmon;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
        }
        .angka{
            display: flex;
        }
    </style>
</head>
<body>
    <?php for ($i =11; $i>0; $i--):?>
        <div class="angka">
            <?php for ($angka =1; $angka<$i; $angka++): ?>
                    <div class="box"><?= $angka; ?></div>
                <?php endfor ?>
        </div>       
    <?php endfor  ?>
    
</body>
</html>