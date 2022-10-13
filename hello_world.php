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

    $dateTime = date('d/m/Y h:i:s');
    echo "<h2> Date: *$dateTime*</h2>";

    $note_math = 15;
    $note_français = 12;
    $note_anglais = 9;

    $moyenne =  ($note_math +  $note_français + $note_anglais) / 3;
    echo 'la moyenne globale est: ' . $moyenne . '<br /> /20';
    echo "<br />";
    $prix_ht = 100;
    $tva = 20;
    $tcc = $prix_ht * (1 + $tva / 100);

    echo "<h2>Le prix tout taxe compris : $tcc $</h2>";
    echo "<br />";

    $test = "42";
    var_dump($test);
    echo "<br />";

    $sexe = "femme";

    if ($sexe == "femme") {
        echo "<p>vous êtes une charmante demoiselle</p>";
    } else {
        echo "<p>vous êtes un beau Gosse</p>";
    };

    $budget = 15593.89;
    $achats = 1554.76;

    if ($budget >= $achats) {
        echo "le budget est ok";
    } else {
        echo "revoyez vos copie";
    }
    echo "<br />";


    $age = 14;


    if ($age >= 18) {
        echo " vous êtes majeur";
    } else {
        echo 'vous êtes mineur';
    }

    echo "<br />";
    echo "<br />";

    $heure = 20;

    if ($heure < 0 || $heure > 24) {
        echo "hors fuseau Horaire";
    } elseif ($heure >= 6 && $heure <= 12) {
        echo "bonne matinée";
    } elseif ($heure > 12 && $heure <= 18) {
        echo "bon après-midi";
    } else {
        echo "la nuit a été longue";
    }


    echo "<br />";
    echo "<br />";

    // $postale = 77000;

    // while ($postale <= 77999) {
    //     echo "$postale". ' ';
    //     $postale++;
    // }

    echo "<br />";
    echo "<br />";

    $multi5 = 5;

    for ($i = 1; $i <= 10; $i++) {
        echo $multi5 . "x" . $i . ' = ' . ($multi5 * $i) . "<br />";
    }

    echo "<br />";
    echo "<br />";

    // for ($i = 1; $i <= 5; $i++) {
    //     if ($i == 3) {

    //         echo "<h2>$i</h2>";

    //     }else {

    //         for ($k = 1; $k <= $i; $k++) {
    //             echo $i;
    //         }
    //     }
    //     echo "<br />";
    // }

    echo "<br />";
    echo "<br />";

    // $var = 0;
    // while ($var <= 20) {

    //     if ($var == 10) {
    //         echo "<h2>$var</h2>";

    //     }else {
    //         echo $var;
    //     }
    //     echo  '<br />';
    //     $var = $var + 2;
    // }

    $tabl =  [
        
            "France" => "Paris",
            "Allemagne" => "Berlin",
            "Italie"=> "Rome"
        
    ];

    foreach ($tabl as $value) {
        echo $value . ' ';
    }
    ?>


</body>

</html>