<?php 

// interfacce molto simili alle classi astratte con la differenza che non hanno proprietà e i loro metodi possono essere solo public, tutti i loro metodi sono abstract e per questo non c'è bisogno di scriverlo (anche classi di diverso 'genere' possono implentare la stessa interfaccia!!!) N.B. se si implementa un'interfaccia si ha l'obbligo di dover utilizzare tutti i metodi che essa contiene!!


abstract class Persona{

    public $nome;
    public $cognome;

    function __construct($nome, $cognome){

        $this->nome= $nome ;
        $this->cognome= $cognome ;

    }

    abstract public function saluta($nome,$cognome);
   

}



class Insegnante extends Persona implements Entita{

    public $materia;

    function __construct($nome, $cognome,$materia){

        $this->nome= $nome ;
        $this->cognome= $cognome ;
        $this->materia= $materia ;

    }


    function saluta ($nome,$cognome,$materia=''){
        echo 'Ciao sono ' . $this->nome . ' ' . $this->cognome . ' ed insegno '. $this->materia . '<br>';
    }

    function cade_a_terra(){
        echo ' Tonff!!! Che male sono finito per terra!!!';
    }

    
    
}

class Telefono {



}

class Iphone extends Telefono implements Entita{

    function cade_a_terra(){
        echo 'Crack!!';
    }
}


// come in questo esempio due entita completamente diverse come un insegnante ed un Iphone implementano l'interfaccia Entita perchè tutte e due hanno in comune che possono cadere a terra
interface Entita{

    function cade_a_terra();
}









































?>