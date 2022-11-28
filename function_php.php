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


    <?php

    use LDAP\Result;

    date_default_timezone_set('UTC + 2');

    $showDate = date('l jS \of F Y h:i:s A');

    echo "<h2>$showDate</h2>";
    echo "<br />";
    echo "<br />";


    $stringC = "souley dOIt aller a la maISon";

    echo "<br />";
    echo "<br />";


    $resultat = strtolower(substr($stringC, 0, strlen($stringC)));

    $rest = strtolower($stringC);
    echo $rest;

    echo ucfirst($rest);

    echo "<br />";
    echo "<br />";

    echo ucfirst($resultat) . "<br> avant: ";
    echo "<br />";
    echo "<br />";

    function carre ($nb){

        return $nb ."<sup>2 =". $nb * $nb;
    }

    for ($i=0; $i <= 10; $i++) { 
        
        echo "<li>" . carre($i). "</li>";
    }

    echo "<br />";
    echo "<br />";
    $n=10;
 for($ligne=1;$ligne<$n;$ligne++)
 {
 if($ligne%2)
 $class='impair';
 else
 $class='pair';
 echo'<tr class="'. $class. '">';
 for($col=1;$col<$n;$col++)
 {
 if($ligne==1 || $col==1)
 $cellule='th';
 else
 $cellule='td';
 echo"";
 if(($ligne!=1) and ($ligne==$col))
 echo'<strong>';
 if($ligne!=1 || $col!=1)
 echo $ligne*$col;
 if(($ligne!=1) and ($ligne==$col))
 echo'</strong>';
 echo"</$cellule>";
 }
 echo"</tr>\n";
 }
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