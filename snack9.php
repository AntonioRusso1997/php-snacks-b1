<?php
include __DIR__ . '/partials/database9.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div id="root">
        <div v-for="hotel in hotels" class="card">
        <h2 class="red">Nome: <span>{{hotel.name}}</span></h2>
        <h3 class="red">Descrizione: <span>{{hotel.description}}</span></h3>
        <h3 class="red">Voto: <span>{{hotel.vote}}</span></h3>
        <h3 class="red">Distanza dal centro: <span>{{hotel.distance_to_center}}</span></h3>
        </div>
    </div>

<script src="js/main9.js"></script>
</body>

<style>

    .card {
        margin: 40px auto;
    }
    .red {
        color: red;
    }
    span {
        color: black;
    }
</style>
</html>