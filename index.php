<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo ("hello darling");
    //1. feladat
    $tomb = [];
    $also = 1;
    $felso = 100;
    echo "<br>";
    for ($index1 = 0; $index1 < 5; $index1++) {
        $randomSzam = rand($also, $felso);
        $tomb[$index1] = $randomSzam;
        echo ($tomb[$index1] . " ");
    }

    
    $osszeg = 0;
    foreach ($tomb as $ertek) {
        $osszeg += $ertek;
    }
    echo "Összeg: " . $osszeg;



    ?>


</body>

</html>