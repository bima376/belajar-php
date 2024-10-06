<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mengelurarkan array</title>
</head>
<body>    
    <?php      
    $hewan = ['anjing', 'babi', 'cicak', 'domba'];
        for($a =0; $a<count ($hewan); $a++)
        {
            echo $hewan[$a];
        }
    ?> 
</body>
</html>