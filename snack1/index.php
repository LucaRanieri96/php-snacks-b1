/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

<?php 
    $matches = [
        ["Milano", "Cantù",44,107],
        ["Atlanta Hawks", "Boston Celtics",78,56],
        ["Miami Heat", "Brooklyn Nets",23,45],
        ["Toronto Raptors", "Indiana Pacers",90,78],
    ];   

    foreach ($matches as $match) {
        echo $match[0] . " - " . $match[1] . " | " . $match[2] . "-" . $match[3] . "<br>";
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>