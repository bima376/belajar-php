<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assosiativ array</title>
</head>
<body>    
    <?php 
        $data = array (
            "nama" => "maghrib",
            "umur" => "222",
            "kerja" => "nganggur",
        );
        $data2 = array (
            "device" => "laptop",
            "spek" => "kentang",
            "harga" => "mahal",
        );

        print_r($data);

        $a ['nama'] = "Asar" . "<br>";
        echo "namanya" . $a['nama']. "<br>";
        echo "Magh" . $data['nama']. "<br>";


        print_r(array_values($data)). "<br>"; //mengambil nilai
        print_r(array_keys($data)). "<br>"; //mengambil kata kunci
        print_r(array_merge($data2, $data)). "<br>"; //menggabungkan beberapa array

    ?> 
</body>
</html>