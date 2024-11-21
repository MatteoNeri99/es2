<?php 

// variabile globale
$nome= $_POST['nome'];

$cognome= $_POST['cognome'];


function nome() {

    // in PHP le variabili globali non funzionano nelle funzioni
    $nome = 'Claudio';
    echo $nome;

}

function cognome() {

    // in questa maniera richiamiamo e cambiamo il valore  la variabile globale cognome 
    $GLOBALS['cognome'] = 'Claudietto';

    echo $GLOBALS['cognome'];
    
}

nome();
cognome();
echo $nome;

?>