<?php 
// UNIX Timestamp è la data utilizzata nei PC è parte contando i secondi dal Gennaio 1 , 1970 00:00:00 GTM (Greenwich Mean Time)
// lo zero in questo caso indica i secondi passati dallo UNIX Timestamp
echo $dataUnix= date('d-m-Y', 0) . '<br>';
echo $dataCorrente= date('d-m-Y') . '<br>';

/* possiamo poi indicare all'interno di date (per le date)
    d - numero del giorno
    D - numero del giorno abbreviato (in inglese)
    m - numero del mese
    M - nome del mese abbreviato (in inglese)
    y - anno (le ultime due cifre)
    Y - anno per intero
*/

echo $FusoOrarioGreenwich = date('H:i:s')  . '<br>';

/* possiamo poi indicare all'interno di date (per gli orari)
    h - ore in formato da 12
    H - ore in formato da 24
    i - minuti
    s - secondi
    a - am o pm in minuscolo
    A - AM o PM in maiuscolo
*/
// utilizziamo ate_default_timezone_set() per impostare il fusorario della timezone che ci interessa (gli orari inseriti prima del cambio di fuso orario avranno il fuso orario di Greenwich)
date_default_timezone_set('Europe/Rome'); 

echo $FusoOrarioRoma = date('H:i:s')  . '<br>';

// permette di avere il tistamp del giorno e orario inserito a numeri rispettivamente (ora,minuti,secondi,mese,giorno,anno)
echo $timeStampOggi = mktime (13,18,00,11,26,2014)  . '<br>';

/* permette di avere il tistamp del giorno e orario inserito in stringa (data , ora), possiamo anche inserire now per evere quella corrente, yesterday per quella di ieri tommorow per domani ecc..
non scrivendo l'orario parte dalla mezzanotte*/
echo $timeStampOggi = strtotime ('26-11-2024 13:18')  . '<br>';

// possiamo anche aggiungere o rimuovere anni mesi giorni ad una data
echo $dataModificata = date('d-m-Y' , strtotime('now'. '+3 month'))












































?>