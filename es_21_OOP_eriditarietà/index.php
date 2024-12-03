<?php 

// creo una nuova classe persona con proprietà e metodi
class Persona{

    public $nome;
    public $cognome;

    function __construct($nome, $cognome){

        $this->nome= $nome ;
        $this->cognome= $cognome ;

    }

    public function saluta(){
        echo 'Ciao sono ' . $this->nome . ' ' . $this->cognome .'<br>';
    }

    // con il modificatore di accesso protected possiamo accedere colo nella classe in cui e dichiarata o le classi che estendono quest'ultima
    protected function  cammina(){
        echo 'Ciao sono ' . $this->nome . ' ' . $this->cognome . ' ed adesso sto camminando'. '<br>';
    }
   

}



// creo una classe Insegnante che estende la classe  persona e quindi eredità proprietà  metodi e constructor di persona
class Insegnante extends Persona{

    public $materia;

    // in questa maniera siamo andati a sovrascreivere il constructor contenuto nella classe Persona (Override) naturalmente abbiamo bisogno di riscrivere anche le proprietà ereditate da Persona
    function __construct($nome, $cognome,$materia){

        $this->nome= $nome ;
        $this->cognome= $cognome ;
        $this->materia= $materia ;

    }

    // in questa maniera siamo andati a sovrascreivere il metodo contenuto nella classe Persona (Override)
    function saluta (){
        echo 'Ciao sono ' . $this->nome . ' ' . $this->cognome . ' ed insegno '. $this->materia . '<br>';
    }


    // in questa maniera vado ad recuperare il metodo cammina appartenente a Persona(se fosse stata private non avevamo modi di accedere a)
    function prova(){
        $this-> cammina();
    }
    
}

$insegnanteUno = new Insegnante('Giovanna', 'Secchio','Italiano');

$insegnanteUno->saluta();

$insegnanteUno->prova();














?>