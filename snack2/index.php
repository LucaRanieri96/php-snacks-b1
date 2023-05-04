Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella
documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un
numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <input type="text" name="name">
        <input type="mail" name="mail">
        <input type="number" name="age">
        <input type="submit" value="Submit">
    </form>
</body>

</html>