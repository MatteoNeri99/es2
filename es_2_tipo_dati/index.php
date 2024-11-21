<?php 

// stringa
$nome ='Matteo';
// intero
$eta =25;
// float
$altezza= 1.84;
// boolean
$is_online =false;
// array
$interessi =['calcio', 'videogame', 'cinema'];
// null
$fidanzata;

// ogetto di tipo perosna con valori nome e cognome
class Persona {

    public $nome;
    public $cognome;

    public function __construct($nome , $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

}

// racchiudo in una variabile un nuovo oggetto di tipo persona
$persona_uno= new Persona('Giovanni', 'Carletti');

// metodo che utilizziamo per controllare il tipo di dato e il valore
var_dump($persona_uno)


?>