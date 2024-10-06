<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach array</title>
</head>
<body>    
    <?php    
        //   array
    $animal = ['ANJING', 'KUCING', 'KECOA', 'PUYUH'];
        foreach($animal as $h)
        {
            echo $h. "<br>";
        }

        // asosiativ array
    $data = [  
        'nama' => 'hitam',
        'umur' => '33',
        'sifat' => 'mules',
    ];
    foreach($data as $key =>$value){
        echo $value. "<br>";
    }

    ?> 
</body>
</html>
