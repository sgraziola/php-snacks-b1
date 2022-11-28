<?php
/*  
Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60

*/

$risultati = [
    [
        "home" => 'Olimpia milano',
        "away" => 'cantù',
        "homePoints" => 60,
        "awayPoints" => 55,
    ],
    [
        "home" => 'Avellino',
        "away" => 'Sassari',
        "homePoints" => 70,
        "awayPoints" => 25,
    ],
    [
        "home" => 'Bologna',
        "away" => 'Treviso',
        "homePoints" => 40,
        "awayPoints" => 54,
    ],
    [
        "home" => 'SudTirol',
        "away" => 'Palermo',
        "homePoints" => 56,
        "awayPoints" => 66,
    ],
    [
        "home" => 'Modena',
        "away" => 'Padova',
        "homePoints" => 72,
        "awayPoints" => 81,
    ],

];

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
    <ul>
        <?php foreach ($risultati as $partita) : ?>
            <li>
                <?= $partita['home'] . '-' . $partita['away'] . '|' . $partita['homePoints'] . '-' . $partita['awayPoints'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>