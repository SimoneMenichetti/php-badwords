<?php

// processo per ricevere i dati dall modulo form
$paragrafo = $_POST["paragrafo"];
$parola = $_POST["parola"];

// calcoliamo la lunghezza del paragrafo

$lunghezzaParagrafo = strlen("paragrafo");


echo "<p>$paragrafo</p>";
echo "<p>Lunghezza: $lunghezzaParagrafo caratteri</p>";

?>