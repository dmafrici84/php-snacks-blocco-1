<!--
Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
 -->

 <?php

    $partite = [
      "gara1" => ["sqCasa" => "Openjobmetis Varese", "sqOspite" => "Armani Exchange Milano", "puntiCasa" => 78, "puntiOspite" => 86],
      "gara2" => ["sqCasa" => "S.Bernardo-Cinelandia Cantù", "sqOspite" => "Vanoli Basket Cremona", "puntiCasa" => 95, "puntiOspite" => 84],
      "gara3" => ["sqCasa" => "Umana Reyer Venezia", "sqOspite" => "Happy Casa Brindisi", "puntiCasa" => 78, "puntiOspite" => 81],
      "gara4" => ["sqCasa" => "Segafredo Virtus Bologna", "sqOspite" => "Grissin Bon Reggio Emilia", "puntiCasa" => 98, "puntiOspite" => 71],
      "gara5" => ["sqCasa" => "Germani Basket Brescia	", "sqOspite" => "Pompea Fortitudo Bologna", "puntiCasa" => 83, "puntiOspite" => 77],
      "gara6" => ["sqCasa" => "Carpegna Prosciutto Basket Pesaro", "sqOspite" => "Dè Longhi Treviso", "puntiCasa" => 67, "puntiOspite" => 72],
      "gara7" => ["sqCasa" => "Allianz Pallacanestro Trieste", "sqOspite" => "OriOra Pistoia	", "puntiCasa" => 97, "puntiOspite" => 80],
      "gara8" => ["sqCasa" => "Virtus Roma", "sqOspite" => "Banco di Sardegna Sassari", "puntiCasa" => 88, "puntiOspite" => 93]
    ];

    var_dump($partite);
    echo "<br>";

    foreach ($partite as $value) {
      echo "<br>";
      foreach ($value as $key => $element) {
        if ($key === "sqOspite") {
          echo $element . " | " ;
        } elseif ($key === "puntiOspite") {
          echo $element;
        } else {
          echo $element . " - " ;
        }
      }
      echo "<br>";
    }

  ?>
