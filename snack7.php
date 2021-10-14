<?php 

include __DIR__ . '/partials/alunni.php';
include __DIR__ . '/partials/functions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>snack 7</title>
</head>
<body>
    <?php 
    $average = array_sum($alunno['voti'])/count($alunno['voti']);

    foreach($alunni as $alunno){
        $alunno['none'] . ' ' . $alunno['cognome'] . ' ' . 'media voto: ' . media($alunno["voti"]);
    }

    ?>
</body>
</html>