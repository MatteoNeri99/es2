<?php 

// il json è un modo per passare i dati da un linguaggio ad un altro (formato dati in stringa)

// racchiudo la richiesta in una variabile
$richiesta = $_POST['data'];

// trasformo il contenuto del file json in una stringa
$strJsonFileContents = file_get_contents($richiesta . '.json');

// trasformo dal formato json in un array associativo (il true serve per renderlo un'array associativo e non un object)
$array= json_decode($strJsonFileContents, true);

// invio i dati al front_end
echo json_encode($array);







?>