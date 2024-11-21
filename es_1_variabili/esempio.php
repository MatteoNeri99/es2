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

// si usa define per creare una variabile constante anche dentro una funzione
define('INDIRIZZO', 'Piazza Matteotti');

// si usa const per creare una variabile constante ma non è possibile crearla in una funzione
const ADDRESS = 'PIAZZA GIUBILEO';

nome();
cognome();
echo $nome;

?>