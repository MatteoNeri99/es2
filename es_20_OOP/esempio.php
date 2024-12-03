<?php 



class Persona{

    // proprietà 
    /*
        public ci permette di accedere a proprietà e metodi da ovunque(default)
        protected permette di accedere a proprietà e metodi solo dalla classe e dalle sottoclassi(classi figlie)
        private permette di accedere a proprietà e metodi solo dalla classe
    
    
    */
    public $nome;
    public $cognome;
    protected $eta;
    private $telefono;

    // Costruttore per semplificare la creazione di istanze
    function __construct($nome,$cognome){

        $this->nome = $nome;
        $this->cognome = $cognome;

    }

    // getter e setter (servono per prendere in valore di una proprietà e settare il valore di una proprietà vanno fatte per ogni proprietà)
    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }


    function set_cognome($cognome){
        $this->cognome = $cognome;
    }
    function get_cognome(){
        return $this->cognome;
    }


    function set_eta($eta){
        $this->eta = $eta;
    }
    function get_eta(){
        return $this->eta;
    }


    function set_telefono($telefono){
        $this->telefono = $telefono;
    }
    function get_telefono(){
        return $this->telefono;
    }

    // nelle classi non si chiamano funzioni ma metodi
    function saluta(){
        // come sempre le funzioni in php hanno lo scope locale e quindi abbiamo bisogno del this per reperire i valori delle variabili
        echo '<br> ciao sono ' . $this->nome .' ' . $this->cognome . '<br>';
    }
}

// creo un'istanza di Persona con il costruttore
$personaUno = new Persona('Giovanni', 'Ferri');
$personaUno->set_eta(25);
$personaUno->set_telefono(33355544466);
var_dump($personaUno);

// richiamo il metodo di Persona
$personaUno->saluta();









































?>