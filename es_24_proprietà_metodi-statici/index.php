<?php 
// quando implementiamo una proprietà o un metodo static lo stiamo implementando per la classe e non per le istanze che andremo a creare poi (in questo caso le istanze sono le 'persone' che andremo ad creare)
class Persona {

    public $nome;
    public $cognome;
    // in questo caso conteggio è solo per la classe!!!
    static $conteggio = 0;

    function __construct($nome,$cognome){

        $this->nome= $nome;
        $this->cognome= $cognome;
        // in questa maniera ogni volta che creeremo una persona il conteggio aumenterà di 1 cosi poi da sapere quante istanze sono state create
        Persona::$conteggio++;
        
    }

    static function prova(){

        echo Persona::$conteggio.'<br>';

    }
}

echo Persona::$conteggio.'<br>';

$personaUno=new Persona('Marco','Milano');

echo Persona::$conteggio.'<br>';

$personaDue=new Persona('Mario','Colla');

echo Persona::$conteggio.'<br>';

$personaTre=new Persona('Mirco','Coraggio');

echo Persona::$conteggio.'<br>';

// come possiamo vedere anche se sono tre istanze diverse abbiamo lo stesso risultato proprio perchè il metodo è static e quindi non va a cambiare per ogni istanza
$personaUno->prova();
$personaDue->prova();
$personaTre->prova();















































?>