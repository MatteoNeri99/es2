<?php 

$stringa_uno='piano';

$stringa_due='forte';

// usiamo il punto per concatenare due stringhe (anche se non rinchiuse in variabili)
echo $stringa_uno.$stringa_due;


$lorem=' lorem ipsum dolor sit amet ipsum ';

// metodo strlen per avere numero di caratteri di una stringa (compresi gli spazi)
echo strlen($lorem);

// metodo strtoupper per avere tutta la stringa in maiuscolo
echo strtoupper($lorem);

// metodo strtolower per avere tutta la stringa in minuscolo
echo strtolower($lorem);

// metodo trim per rimuover spazi all'inizio ed alla fine di una stringa
echo trim($lorem);

// metodo str_word_count ritorrna numero di parole in una stringa
echo str_word_count($lorem);

// metodo strlen per avere una stringa al contrario
echo strrev($lorem);

// metodo strpos per sapere la posizione di una parola  (conta in caratteri) primo valore da inserire la stringa nel secondo la parola ricercata
echo strpos($lorem, 'ipsum');

// metodo substr per avere una parte di una stringa (conta in caratteri) primo valore da inserire la stringa nel secondo da dove iniziare nel terzo la lunghezza (secondo e terzo espressi in interi)
echo substr($lorem, 7 , 17);

// per sostituire una parola o una frase in un altra primo valore cosa sostituire secondo con cosa sostituire e terzo dove sostituire
echo str_replace('lorem', 'Matteo', $lorem);

































?>