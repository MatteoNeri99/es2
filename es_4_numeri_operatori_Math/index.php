<?php 

$operatore_int= 15;

$operatore_float= 15.7;

$opearatore_str= '17';


// controllo se la variabile è un intero risponde con un bool True o false
var_dump(is_int($operatore_int));

// controllo se la variabile è un float risponde con un bool True o false
var_dump(is_float($operatore_int));

// anche se il secondo è un numero in stringa PHP sommerà i due numeri (se ci fosse anche solo una lettera tutto ciò non funzionerebbe)
echo $operatore_int + $opearatore_str;

// aggiungendo (int) o (float) castiamo->(cambiamo di tipo) e quindi da stringa diventerà o int o float
$operatore_str_due=(int) '20';

$operatore_negativo =-7;

// grazie al metodo abs avremo il valore assoluto del numero
var_dump(abs($operatore_negativo));

// grazie ai metodi min e max possiamo trovare il valore minimo o massimo dei numeri inseriti 
var_dump(min(10,15,37,58,23,54,34));

// grazie al metodo sqrt troviamo la radice quadrata di un numero
var_dump(sqrt(16));

// grazie al metodo round possiamo arrotondare un numero (da 0.49 per difetto da 0.5 per eccesso)
var_dump(round(16));

// grazie al metodo rand avremo come risultato un numero randomico tra i due scritti
var_dump(rand(16,100));

/*operatori 

+ somma
- meno
* per
/ diviso
% modulo->ritorna il resto di ciò che si ottiene da una divisione (es 14%2 = 0 14%3= 1) usato per controllare se un numero è pari o dispari
** elevazione di potenza

*/

/*operatori di assegnazione

+= somma il vecchio valore con quello nuovo
- sottrae il valore nuovo al vecchio
* moltiplica il vecchio valore con il nuovo
/ divide il vecchio valore con il nuovo

*/

// aumenterà di uno il valore
$operatore_int++;

// diminuirà di uno il valore
$operatore_int--;




































?>