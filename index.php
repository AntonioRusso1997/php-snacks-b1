<?php
// // SNACK 1

// //Creo array della giornata di campionato
// $matches = [
//     [
//         'homeTeam' => ' Pesaro',
//         'awayTeam' => ' Trieste',
//         'homePoints' => 74,
//         'awayPoints' => 61
//     ],
//     [
//         'homeTeam' => ' Reggiana',
//         'awayTeam' => ' Baket Napoli',
//         'homePoints' => 102,
//         'awayPoints' => 90
//     ],
//     [
//         'homeTeam' => ' Cremona',
//         'awayTeam' => ' Fortitudo Bologna',
//         'homePoints' => 94,
//         'awayPoints' => 78
//     ],
//     [
//         'homeTeam' => ' Virtus Bologna',
//         'awayTeam' => ' Varese',
//         'homePoints' => 97,
//         'awayPoints' => 56
//     ],
//     [
//         'homeTeam' => ' Olimpia Milano',
//         'awayTeam' => ' Trento',
//         'homePoints' => 93,
//         'awayPoints' => 72
//     ],
//     [
//         'homeTeam' => ' Brescia',
//         'awayTeam' => ' Tortona',
//         'homePoints' => 77,
//         'awayPoints' => 79
//     ],
//     [
//         'homeTeam' => ' Brindisi',
//         'awayTeam' => ' Sassari',
//         'homePoints' => 89,
//         'awayPoints' => 80
//     ],
//     [
//         'homeTeam' => ' Treviso',
//         'awayTeam' => ' Venezia',
//         'homePoints' => 80,
//         'awayPoints' => 76
//     ]
//     ];

//     //Titolo Snack
//     echo '<h1 style="color:red">SNACK 1:</h1>';

//     //Ciclo per stampare tutte le partite
//     for ($i =0; $i < count($matches); $i++) {
//         echo '<h2>'.$matches[$i]['homeTeam'] . ' - ' . $matches[$i]['awayTeam'] . ' | ' . '<strong style="color:blue">'.$matches[$i]['homePoints'].'</strong>' . ' - ' . '<strong  style="color:blue">'.$matches[$i]['awayPoints'].'</strong>' .'</h2>';
//     };

//     echo '<hr><hr>';


//     //SNACK 2

//      //Titolo Snack
//      echo '<h1 style="color:red">SNACK 2:</h1>';

//     //Creo variabili get per nome, mail e età
//     $name = $_GET['name'];
//     $mail = $_GET['mail'];
//     $eta = $_GET['eta'];

//     //Verificare che il nome sia più lungo di 3 caratteri
//     if (empty($name) && empty($mail) && empty($eta)) {
//         echo '<h2 style="color:red">Error! Inserire tutti i dati</h2>';
//         } else {
//             if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($eta) !== false)
//             {
//                 echo '<h2 style="color:green">ACCESSO RIUSCITO</h2>';

//             } else //Se non rispetta i requisiti
//             {
//                 echo '<h2 style="color:red">ACCESSO NEGATO, inserire i dati correttamente.</h2> 
//                 <ul>
//                     <li> Il nome deve essere più lungo di 3 caratteri. </li>
//                     <li> la mail deve contenere una @ e un . </li>
//                     <li> Età deve essere un numero </li>
//                 </ul> ';
//             }
//         }







// // SNACK 3

// // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
// // un array di post associati a quella data. Stampare ogni data con i relativi post.

// $posts = [

//     '10/01/2019' => [
//         [
//             'title' => 'Post 1',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 1'
//         ],
//         [
//             'title' => 'Post 2',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 2'
//         ],
//     ],
//     '10/02/2019' => [
//         [
//             'title' => 'Post 3',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 3'
//         ]
//     ],
//     '15/05/2019' => [
//         [
//             'title' => 'Post 4',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 4'
//         ],
//         [
//             'title' => 'Post 5',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 5'
//         ],
//         [
//             'title' => 'Post 6',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 6'
//         ]
//     ],
// ];

// foreach($posts as $date => $element){
//     echo "<h1> <strong>Data: $date</strong> </h1>";
//     foreach($element as $key => $post){
//         foreach($post as $postInfo => $info){
//             if($postInfo === 'title'){
//                 echo "<h3>$postInfo : $info</h3>";
//             }else{
//                echo "<p>$postInfo : $info</p>";
//             }
//         }
//     }
// }

// SNACK 4

// Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta (modificato) 

$i = 0;
$randomNumbers = [];
    do {
        $Number = rand(1, 100);
        if (!in_array($Number, $randomNumbers))
            {
                array_push($randomNumbers, $Number);
                $i++;
            }

    } while ($i < 15);
    var_dump($randomNumbers);

foreach ($randomNumbers as $number)
    echo ' <h2>' . $number . ' </h2>';
?>