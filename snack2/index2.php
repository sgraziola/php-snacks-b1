<?php
/* 
Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */
var_dump(strlen($_GET['name']) > 3);
var_dump(str_contains($_GET['email'], '.'));
var_dump(str_contains($_GET['email'], '@'));
var_dump(is_numeric($_GET['age']) == 1);
if (strlen($_GET['name']) > 3 && str_contains($_GET['email'], '.') && str_contains($_GET['email'], '@') && is_numeric($_GET['age']) == 1) {
    echo 'accesso riuscito';
} else {
    echo 'accesso negato';
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
    <form action="index2.php" method="get">
        <div>
            <label for="name">Inserisci nome:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Inserisci email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="age">Inserisci età:</label>
            <input type="text" name="age" id="age">
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>