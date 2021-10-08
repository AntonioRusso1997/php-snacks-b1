<?php
// SNACK 1

//Creo array della giornata di campionato
$matches = [
    [
        'homeTeam' => ' Pesaro',
        'awayTeam' => ' Trieste',
        'homePoints' => 74,
        'awayPoints' => 61
    ],
    [
        'homeTeam' => ' Reggiana',
        'awayTeam' => ' Baket Napoli',
        'homePoints' => 102,
        'awayPoints' => 90
    ],
    [
        'homeTeam' => ' Cremona',
        'awayTeam' => ' Fortitudo Bologna',
        'homePoints' => 94,
        'awayPoints' => 78
    ],
    [
        'homeTeam' => ' Virtus Bologna',
        'awayTeam' => ' Varese',
        'homePoints' => 97,
        'awayPoints' => 56
    ],
    [
        'homeTeam' => ' Olimpia Milano',
        'awayTeam' => ' Trento',
        'homePoints' => 93,
        'awayPoints' => 72
    ],
    [
        'homeTeam' => ' Brescia',
        'awayTeam' => ' Tortona',
        'homePoints' => 77,
        'awayPoints' => 79
    ],
    [
        'homeTeam' => ' Brindisi',
        'awayTeam' => ' Sassari',
        'homePoints' => 89,
        'awayPoints' => 80
    ],
    [
        'homeTeam' => ' Treviso',
        'awayTeam' => ' Venezia',
        'homePoints' => 80,
        'awayPoints' => 76
    ]
    ];

    //Titolo Snack
    echo '<h1 style="color:red">SNACK 1:</h1>';

    //Ciclo per stampare tutte le partite
    for ($i =0; $i < count($matches); $i++) {
        echo '<h2>'.$matches[$i]['homeTeam'] . ' - ' . $matches[$i]['awayTeam'] . ' | ' . '<strong style="color:blue">'.$matches[$i]['homePoints'].'</strong>' . ' - ' . '<strong  style="color:blue">'.$matches[$i]['awayPoints'].'</strong>' .'</h2>';
    };

    echo '<hr><hr>';


    //SNACK 2

     //Titolo Snack
     echo '<h1 style="color:red">SNACK 2:</h1>';

    //Creo variabili get per nome, mail e età
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $eta = $_GET['eta'];

    //Verificare che il nome sia più lungo di 3 caratteri
    if (empty($name) && empty($mail) && empty($eta)) {
        echo '<h2 style="color:red">Error! Inserire tutti i dati</h2>';
        } else {
            if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($eta) !== false)
            {
                echo '<h2 style="color:green">ACCESSO RIUSCITO</h2>';

            } else //Se non rispetta i requisiti
            {
                echo '<h2 style="color:red">ACCESSO NEGATO, inserire i dati correttamente.</h2> 
                <ul>
                    <li> Il nome deve essere più lungo di 3 caratteri. </li>
                    <li> la mail deve contenere una @ e un . </li>
                    <li> Età deve essere un numero </li>
                </ul> ';
            }
        }
?>