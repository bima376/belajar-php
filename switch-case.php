<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case</title>
</head>
<body>
    <?php         
        $nama ="ba";
        switch ($nama) {
            case 'bim':
                echo 'namanya b';
                break;
            case 'ba':
                echo 'namanya bala';
                break;                       
            case 'laa':
                echo 'namanya lala';
                break;   
            default: 
                echo 'tidak ada yg benar';
        }

    ?>
</body>
</html>