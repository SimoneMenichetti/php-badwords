<?php

// processo per ricevere i dati dall modulo form
$paragrafo = $_POST["paragrafo"];
$parola = $_POST["parola"];

// calcoliamo la lunghezza del paragrafo

$lunghezzaParagrafo = strlen("paragrafo");

// spstituzione parola da censurare con ***

$paragrafoParolacensurata=str_replace($parola,'***',$paragrafo);

// Calcolo della lunghezza del paragrafo censurato
$lunghezzaparagrafocensurato=strlen("paragrafoParolacensurata");

// stampiamo in pagina 

// section paragrafo originale non censurato
echo "<h2>Paragrafo originale:</h2>";
// mostriamo il paragrafo originale 
echo "<p>$paragrafo</p>";
// stampiamo la lunghezza del parafgrafo
echo "<p>Lunghezza: $lunghezzaParagrafo caratteri</p>";

// section paragrafo censurato 

// titolo
echo "<h2>Paragrafo parola censurata:</h2>";
// censuriamo il paragrafo
echo "<p>$paragrafoParolacensurata</p>";
// stampiamo la lunghezza del parafgrafo
echo "<p>Lunghezza:$lunghezzaparagrafocensurato caratteri</p>";
?>