<!-- ottima documentazione sulle regex in php -->
https://www.tutorialrepublic.com/php-tutorial/php-regular-expressions.php 

<?php 

// regex o RegExp (regular expression) servono per definire un pattern ( è un modello o una serie di linee guida che aiutano a strutturare il codice in modo da renderlo più efficiente, manutenibile e, in molti casi, riutilizzabile.)
 
$testo = 'il ragazzo che spiega è molto bravo ed è anche molto spiritoso!';

// Match semplice (ricerca molto semplice delle lettere che distiguono una parola-> occorrenza ) 
$pattern = '/ragaz[zx]o/';

if(preg_match($pattern , $testo)){

    echo 'Match trovato' . '<br>';

}else{

    echo 'Match non trovato' . '<br>';

}


// aggiungendo il cappellino all'inizio della classe dei caratteri semplicemente cerchiamo un occorrenza che inizia con 'ragaz[che poi non abbia z o x ]o'
$patternDue = '/ragaz[^zx]o/';


if(preg_match($patternDue , $testo)){

    echo 'Match trovato' . '<br>';

}else{

    echo 'Match non trovato' . '<br>';

}


$patternTre = '/è/';
// il metodo preg_match_all ci permete di creare un $array, questo ci serve per vedere quante occorrenze (definite dal pattern) sono state trovate 
$matches =preg_match_all($patternTre , $testo , $array);
echo $matches . ' match sono stati torvati'. '<br>';
var_dump($array) ;
echo '<br>';



/* classi di caratteri 

    [abc] classe di caretteri semplice che cerca occorenza per lettere/numeri o caratteri insiriti tra le quadre
    [^abc] classe di caretteri che cerca occorrenza che non abbia lettere/numeri o caratteri insiriti tra le quadre
    [a-z]  classe di caratteri che vanno dalla a alla z (in minuscolo)
    [A-Z]  classe di caratteri che vanno dalla A alla Z (in maiuscolo)
    [a-Z]  classe di caratteri che vanno dalla a alla Z (sia in maiuscolo che in minuscolo)
    [0-9]  classe di caratteri che va da 0 a 9
    [a-z0-9]  classe di caratteri che va dalla a alla z e tra 0 e 9

*/

/*classi predefinite

    .  classe che matcha ogni singolo carattere apparte la \n newline (ritorno a capo)
    \d classe predefinita che va da 0 a 9
    \D classe predefinita che va a negare  da 0 a 9 ( [^0-9] )
    \s classe predefinita che matcha ogni carattere 'invisibile' spazi,tab,newline e carattere di ritorno [ \t\n\r] 
    \S classe predefinita che matcha ogni carattere ad eccezione dei caratteri 'invisibili'  spazi,tab,newline e carattere di ritorno [^ \t\n\r] 
    \w classe predefinita che matcha ogni carattere dalla a alla z sia minuscola che maiuscola e da 0 a 9 [a-zA-z_0-9]
    \W classe predefinita che matcha ogni carattere ad eccezione di a alla z sia minuscola che maiuscola e da 0 a 9 [^a-zA-z_0-9]

*/

// esempio classe predefinita con nome di un img 
$nomeImg = 'logo brand nero.png';
// classe predefinita che trova i caratterei 'invisibili'
$patternSpazi = '/\s/';
// variaabile a cui assegniamo il carattere con cui rimpiazziamo i caratteri che vogliamo cambiare
$replacement = '_';
// metodo con cui cambiamo rimpiazziamo i carattere (primo valore-> pattern, secondo valore-> con cosa sostituire,terzo valore-> dove sostituire)
echo preg_replace($patternSpazi, $replacement, $nomeImg). '<br>';


/* quantificatori ci permettono di moltiplicare i caratteri che cerchiamo

    p+ matcha una o più occorrenze di p (in una parola)
    p* matcha zero o più occorrenze di p (in una parola)
    p? matcha zero o una occorrenza di p (in una parola)
    p{2} matcha esattamente 2 occorrenze di p (in una parola, non è detto che siano di fila anche papà ha due p)
    p{2,3} matcha almeno 2 ma al massimo 3 occorrenze di p (in una parola)
    p{2, } matcha almeno 2 occorrenze di p (in una parola)
    p{ ,3} matcha al massimo 3 occorrenze di p (in una parola)

*/

// esempio quantificatori

// creo un pattern che cerca tutti i caratteri 'invisibili' e le virgole
$patternQuantificatore= '/[\s,]+/';
$text = 'i miei colori preferiti sono il giallo, verde ed il viola';

// creo un'array grazie alla funzione preg_split (che appunto splitta tutte le parole ed rimuove ciò che dice il pattern) (primo valore -> $pattern , secondo valore-> testo in cui cercare)
$parts = preg_split($patternQuantificatore, $text);

var_dump($parts);
echo '<br>';

// mando a schermo gli elementi dell'array con un foreach
foreach($parts as $part){
    
    echo $part . '<br>';
}


/*ancore

    ^a matcha tutte le parole che iniziano con a
    a$ matcha tutte le parole che finiscono con a

*/

// esempio di ancora

// con l'ancora cerco tutte le parole che iniziano con M (maiuscola attezione al key sensitive)
$patternAncora = '/^M/';
$names = ['Mario Cardioli', 'Filippo Franchi', 'Giuseppe Mariolo', 'Matteo Rossi'];

// preg_grep crea un array ($matches) ed ci insierisce tutti gli elementi che rispettano il pattern (primo valore -> pattern , secondo valore -> array in cui cercare)
$matches = preg_grep($patternAncora , $names);

// mando a schermo gli elementi dell'array con un foreach
foreach($matches as $match){
    echo $match . '<br>';
}



// limiti di una parola

// creo un pattern che cerchi tutte le parole che iniziano con car e che finiscano con un qualsiasi carattere 
$patternLimite= '/\bcar\w*/';

// rimpiazzo la parola con la stessa ma in grassetto
$replacementDue = '<b>$0</b>';
$textDue = 'le parole che iniziano con car : carrello, carot*, carrateri, carie. Parole che non iniziano per car : fragola, radice, grande.';

// metodo con cui cambiamo rimpiazziamo i carattere (primo valore-> pattern, secondo valore-> con cosa sostituire,terzo valore-> dove sostituire)
echo preg_replace($patternLimite, $replacementDue, $textDue);








































?>