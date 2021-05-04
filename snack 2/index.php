<?php 
/*
PHP Snack 2:
Passare come parametri GET name, mail e age e 
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti 
“Accesso negato”
*/

//variabili


  $nome = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  
  if (strlen($nome) < 3) {
    echo "Accesso negato";
  } elseif (strpos($mail, '.') == false) {
    echo "Accesso negato";
  } elseif (strpos($mail, '@') == false) {
    echo "Accesso negato";
  } elseif (is_numeric($age) == false) {
    echo "Accesso negato";
  } else {
    echo "Accesso riuscito";
  }
?>
