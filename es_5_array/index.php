<?php 


// l'array è una collezione di elementi 
$citta = ['Roma', 'Chieti', 'Firenze'];

// per accedere al valore di un array abbiamo bisogno di riportare il numero del posizionamento (indice, l'indice parte sempre a contare da 0)
echo $citta[1] . '<br>';

// in questa maniera cambiamo valore all'elemnto 0 dell'array
$citta[0] = 'Cagliari';

// Grazie al ciclo for possiamo ciclare tutti gli elemnti di un array (con il metodo count sappiamo il numero di elemnti presenti in un array)
for($i=0; $i < count($citta); $i++){

    echo $citta[$i] . '<br>' ;

}

//sortè un  metodo per ordinare un array (in ordine alfabetico se sono stringhe in ordi di grandezza se sono numeri) rsrot fa esttamente il contrario
sort($citta);

// array_push per aggiungere un elemento alla fine di un'array
array_push($citta, 'Napoli');

// array_pop per riuovere un elemento alla fine di un'array
array_pop($citta, 'Napoli');

// array_unshift per aggiungere un elemento all'inizio di un'array
array_unshift($citta, 'Napoli');

// array_shift per rimuovere un elemento all'inizio di un'array
array_shift($citta, 'Napoli');






// array associativi collezione di  elemnti che appartengono a qualcosa o qualcuno si scrive key=>value (chiave=>valore)
$persona =[
    'nome' => 'Matteo',
    'cognome' => 'Ferri',
    'eta'  => 27
];

// modo per accedere ai valori di un'array associativo tramite key
echo $persona['nome']. '<br>';

// in questa maniera cambiamo valore ad una chiave in un array associativo
$persona['nome'] = 'Carlo';

// Grazie al ciclo for possiamo ciclare tutte le chiavi e i valori presenti in un array associativo
foreach ($persona as $chiave=>$valore){

    echo ' ' . $chiave . ' ' . $valore . '<br>';
}

// ksort metodo per ordinare le chiavi di un'array associativo (in ordine alfabetico se sono stringhe in ordine di grandezza se sono numeri) krsrot fa esttamente il contrario

Ksort($persona);

// asort metodo per ordinare i valori di un'array associativo (in ordine alfabetico se sono stringhe in ordine di grandezza se sono numeri) arsrot fa esttamente il contrario

Ksort($persona);








// array multidimensionale (in questo caso bidimensionale perchè è un array che contiene altri array)
$classi=[

    ['matteo','giovanni','andrea'],
    ['carlo', 'mattia', 'paolo']

];

// per accedere ad un valore abbiamo bisogno di indicare l'indice del primo array e l'indice del valore a cui vogliao accedere
echo $classi[1][2] . '<br>';

// cicliamo inizialmente su gli array contenuti dall'array $classi
for ($classe=0; $classe < count($classi); $classe++){

    echo 'Classe: '. $classe . '<br>';

    // cicliamo su gli elemnti contenuti negli array contenuti dall'array $classi
    for($alunno=0; $alunno < count($classi[$classe]); $alunno++){

        echo $classi[$classe][$alunno] . '<br>';

    }
}



?>

