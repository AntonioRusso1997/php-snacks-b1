<?php

function media($array) {
    $voti = count($array);
    $summ = 0;
    foreach ($array as $voto) {
        $summ += $voto;
    }
  return $summ / $voti;
} 

?>