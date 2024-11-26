<?php 


/* le funzioni sono un blocco di codice che può essere riutilizzato ogni volta che si vuole.
    Le funzioni hanno uno scope locale ciò vuol dire che non hanno accesso alle variabili globali, quindi o si passano come argomento (all' interno delle parentesi) o vengono dichiarate all'interno dello scope della funzione */


// come si scrive una funzione 
function nomeFunzione ($argomentoDaPassare){

    // istruzioni da eseguire
    echo 'ciao ' . $argomentoDaPassare . '<br>';
}

$nome = 'Matteo';

// come si invoca una funzione
nomeFunzione($nome);

// funzione anonima
$funzioneAnonima = function (){
    echo 'ciao Matteo' . '<br>';
};


// negli argomenti possiamo specificare che 'tipo' di dato deve essere passato alla funzione (questo processo si chiama tipizzazione), naturalmente bisogna rispettare il tipo di valore per far funzionare la function 

// possiamo poi tipizzare anche il return della funzione con due punti poi scrivendo il 'tipo' di valore che vogliamo che ritorni (int,str,float,bool ecc..)
function somma (int $valoreUno ,int $valoreDue) : int{

    $somma = $valoreUno + $valoreDue;
    
    // utilizziamo return per ritornare fuori dello scope della funzione il valore di $somma (serve poi inserirlo in una variabile se ci serve come variabile)
    return $somma;
}

$somma = somma (5 , 7);
echo $somma;










?>