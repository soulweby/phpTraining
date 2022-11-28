<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php training</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>


</head>

<body>
    <p>///********************\\\</p>
    <h1>Training PHP</h1>
    <p>///********************\\\</p>
    <!-- <table border=1>
        <colgroup span="4" class="columns"></colgroup>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Population</th>
            <th>Langue</th>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington D.C.</td>
            <td>309 millions</td>
            <td>Anglais</td>
        </tr>
        <tr>
            <td>Suède</td>
            <td>Stockholm</td>
            <td>9 millions</td>
            <td>Suédois</td>
        </tr>
    </table> -->

    <?php

    date_default_timezone_set('UTC + 2');

    $showDate = date('l jS \of F Y h:i:s A');

    echo "<h2>$showDate</h2>";
    echo "<br />";
    echo "<br />";

    $users = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mickael.andrieu@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Mathieu Nebra',
            'email' => 'mathieu.nebra@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Laurène Castor',
            'email' => 'laurene.castor@exemple.com',
            'age' => 28,
        ],
    ];

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => '',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ],
    ];

    // echo '<pre>';
    // // var_dump($users);
    // echo '</pre>';

    echo "<br />";
    echo "<br />";




    echo "<br />";
    echo "<br />";
    $moisFrancais = array(
        1 => 'Janvier', 'Février', 'Mars', 'Avril',
        'Mai', 'Juin',
        'Juillet', 'Aout', 'Septembre', 'Octobre',
        'Novembre', 'Décembre'
    );
    $cellColor = array(
        1 => 'yellow', 'magenta', 'orange', 'green',
        'pink', 'skyblue',
        'crimson', 'mauve', 'coral',
        'teal', 'blue', 'red'
    );


    echo "<table border=2> ";
    for ($i = 1; $i <= 12; $i++) {

        echo '<td>' . $i . "</td><td bgcolor=$cellColor[$i]>" . $moisFrancais[$i] . "<td>";
        ($i % 6 == 0) ? print("<tr></tr>") : print("");
    }
    echo "<table> ";


    echo "<br />";
    echo "<br />";

    $tableau = range(0, 63);

    foreach ($tableau as $key => $value) {
        $tableau[$key] = $tableau[$key]/10;
        // echo $tableau[$key];
    }

    foreach ($tableau as $ke => $val) {
        $val = (string) $val;
        $table[$val] = sin($val);
        // echo $val . " ";
    }

    echo "<table border=\"1\"  width=\"50%\" >";
    echo "<caption><b> Tableau des valeur de sinus de X</br></caption>";
    echo "<tr> <th>X</th> <th>Sin</th><tr>";
    foreach ($table as $cley => $val) {
        echo "<tr><td>$cley</td> <td >$val</td></tr>";
    }
    echo "</table> ";



    $monthDay = [
        'Janvier' => "january",
        'Février' => "february",
        'Mars' => "march",
        'Avril' => "april",
        'Mai' => "may",
        'Juin' => "june",
        'Juillet' => "july",
        'Aout' => "agust",
        'Septembre' => "september",
        'Octobre' => "october",
        'Novembre' => "november",
        'Décembre' => "december"
    ];


    echo "</table>";
    echo "<hr />";

    echo "<br />";
    echo "<br />";

    echo "<br />";
    echo "<br />";


    echo "<br />";
    echo "<br />";


    echo "<br />";
    echo "<br />";


    echo "<br />";
    echo "<br />";


    echo "<br />";
    echo "<br />";






    ?>


</body>

</html>