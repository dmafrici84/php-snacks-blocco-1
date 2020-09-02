<!--
  Snack 2
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
 -->
 
 <?php

    var_dump($_GET);
    echo "<br>";

    $nome = strlen($_GET["nome"]);
    var_dump($nome);
    echo "<br>";

    $punto = strpos($_GET["mail"], ".");
    var_dump($punto);
    echo "<br>";

    $chiocciola = strpos($_GET["mail"], "@");
    var_dump($chiocciola);
    echo "<br>";

    $numero = is_numeric ($_GET["eta"]);
    var_dump($numero);
    echo "<br>";

    if ($nome > 3 && $punto !== false && $chiocciola !== false && $numero === true) {
      echo "Accesso Riuscito";
      echo "<br>";
    } else {
      echo "Accesso Negato";
    }

  ?>
