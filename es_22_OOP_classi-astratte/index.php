<?php 

// la classe astratta è una classe che fa da basa su tutto ciò che andremo a fare e ci permette di implementare dei metodi (abstract) che obbligano le classi che estendono ad implemntarlo
abstract class Persona{

    public $nome;
    public $cognome;

    function __construct($nome, $cognome){

        $this->nome= $nome ;
        $this->cognome= $cognome ;

    }


    // cosi facendo ogni classe che estenderà persona avrà l'obbligo di implementare il metodo cammina con le seguanti regole:
        // stesso nome
        // uguali o minori restrizioni di accesso
        // stessi argomenti minimi
    abstract public function saluta($nome,$cognome);
   

}



class Insegnante extends Persona{

    public $materia;

    function __construct($nome, $cognome,$materia){

        $this->nome= $nome ;
        $this->cognome= $cognome ;
        $this->materia= $materia ;

    }

    //potremmo volere aggiungere dei argomenti opzionali e quindi non obbligatori in questo modo : $proprietà='valore'
    function saluta ($nome,$cognome,$materia=''){
        echo 'Ciao sono ' . $this->nome . ' ' . $this->cognome . ' ed insegno '. $this->materia . '<br>';
    }

    
    
}


$insegnanteUno = new Insegnante('Giovanna', 'Secchio','Italiano');

$insegnanteUno->saluta($insegnanteUno->nome , $insegnanteUno->cognome, $insegnanteUno->materia);






































?>