<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php training</title>
</head>

<body style="background-color:#303; color: white">
    <p>///********************\\\</p>
    <h1>Training PHP</h1>
    <p>///********************\\\</p>

    <?php


    $showDate = date('l jS \of F Y h:i:s A');

    echo "<h1>$showDate</h1>";

    $noteMath = 15;
    $noteFran = 19;
    $noteHist = 14;
    $moyenne = ($noteFran + $noteHist + $noteMath) / 3;
    echo "La moyenne est de $moyenne /20";

    echo "<br />";
    echo "<br />";

    $prixHt = 50;
    $tva = 20;
    $ttc = ($prixHt * (1 + 20 / 100));
    echo "Le prix TTC du produit est de : <h3>$ttc</h3>";


    echo "<br />";
    echo "<br />";
    $test = "42";
    var_dump($test);
    echo "<br />";
    echo "<br />";

    $budget = 154.76;
    $achats = 1554.76;

    if ($budget >= $achats) {
        echo " Le budget permet l'achat de l'appro";
    } else {

        echo "le budjet est insuffisant";
    }

    echo "<br />";
    echo "<br />";
    $age = 18;

    if ($age >= 18) {
        echo "vous êtes majeur";
    } else {
        echo "vous êtes mineur";
    }
    echo "<br />";
    echo "<br />";

    $heure = 14;

    if ($heure < 0 || $heure >= 24) {

        echo "vous êtes hors fuseau";
    } elseif ($heure >= 6 && $heure <= 12) {

        echo "bonne matinée";
    } elseif ($heure >= 12 && $heure <= 18) {

        echo "bonne après midi";
    } else {

        echo "bonne nuit";
    }
    echo "<br />";
    echo "<br />";

    $codePostale = 77000;

    while ($codePostale <= 77999) {

        echo $codePostale . " ";
        $codePostale++;
    }
    echo "<br />";
    echo "<br />";

    $multi = 3;
    for ($i = 1; $i <= 10; $i++) {

        echo $multi . 'x' . $i . '=' . $multi * $i . '<br />';
    }
    echo "<br />";
    echo "<br />";
    for ($i = 0; $i < 5; $i++) {

        for ($k = 0; $k < 5; $k++) {
            
            echo "camara". $k;
            // echo $k;
        }
        echo " <br/>souley" . $i;

    }
    echo "<br />";
    echo "<br />";

    $var = 0;
    while ($var <= 20) {


        if ($var == 10) {
            echo "<strong>$var</strong>";
        } else {
            echo $var . " <br /> ";
        }
        // echo $var;
        $var = $var + 2;
    }

    for ($var=0; $var <= 10 ; $var= $var= $var + 2) { 

        if ($var == 6) {
            echo "<strong>$var <br> </<strong>";
        } else {
            echo $var ;
        }
        // echo $var;
    }


    echo "<br />";
    echo "<br />";

    $tableau = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "Italie" => "Rome",

    );

    foreach ($tableau as $key => $value) {

        echo " $key => $value <br>\r";
    }
    echo "<br />";
    echo "<br />";

    for ($i = 0; $i < 10; $i++) {
        $table[] = rand(0, 50);
    }
    var_dump($table);
    echo "<br />";
    echo "<br />";

    if (in_array(42, $table)) {
        echo " 42 est bien dans le tableau";
    } else {
        echo "Pas de bole le 42 n'y figure pas";
    }

    for ($i = 0; $i < 10; $i++) {
        $tabl[] = rand(0, 100);
    }

    foreach ($tabl as $value) {
        if ($value < 50) {
            $tabl1[] = $value;
        } else {
            $tabl2[] = $value;
        }
    }

    echo "<br />";
    echo "<br />";
    $pays_population = array(
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
    );

    echo "Le nombre d'element est : " . count($pays_population);


    echo "<br />";
    echo "<br />";



    ?>


</body>

</html>