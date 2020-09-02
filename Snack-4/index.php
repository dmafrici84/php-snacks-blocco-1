<!--
  Snack 4
  Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
 -->

<?php

  $arr = [];

  while (count($arr) < 15) {

    $numero = rand(1, 20);
    var_dump($numero);
    echo "<br>";
    if(!in_array($numero, $arr)) {
      $arr[]= $numero;
    }

  }
  var_dump($arr);

 ?>
