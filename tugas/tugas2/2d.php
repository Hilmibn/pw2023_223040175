<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2d</title>
    <style>
        .kotak{
            width: 500px;
            height: 500px;
        }
        .putih{
            width: 100px;
            height: 100px;
            background-color: white;
            border: 2px solid black;
            display: inline-block;
            box-sizing: border-box;
            margin-top: -4px;
            margin-left: -4px;
        }
        .hitam{
            width: 100px;
            height: 100px;
            background-color: black;
            border: 2px solid black;
            display: inline-block;
            box-sizing: border-box;
            margin-top: -4px;
            margin-left: -4px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <?php for ($i =1; $i<=25; $i++): ?>
            <?php if ($i %2==0): ?>
                <div class="putih"></div>
                <?php else: ?>
                <div class="hitam"></div>

            <?php endif ?>    
        <?php endfor ?>
    </div>
</body>
</html>