<?php 

/* modalita di apertura  di un file

    'r' reading (leggo il file ha bisogno che il file esista)
    'r+' reading and writing (leggo e scrivo nel file ha bisogno che il file esista)
    'w' writing (scrivo nel file senza poterlo leggerre e sostituisco ciò che scrivo con quello che c'era prima e lo creo nel caso non esista)
    'w+' writing e reading  (scrivo sostituendo e leggo nel file e lo creo nel caso non esista)
    'a' append (mantiene il contenuto e attacca sotto nel caso il file non esiste cerca di crearlo)
    'a+' append (legge e mantiene il contenuto e attacca sotto nel caso il file non esiste cerca di crearlo)
    'x'  xplus (possiamo solo scrivere ritorna un errore se il file non esiste e poi lo crea)
    'x+' xplus (possiamo leggere e scrivere ritorna un errore se il file non esiste e poi lo crea)

*/

// rachiudo il nome del file in una variabile
$nomeFile = 'text.txt';

$testo = ' ho aggiunto una stringa grazie ad fwrite';

// usiamo un if per fare un check per vedere se il file esiste (non serve per tutte le modalità di apertura in quanto alcune creano il file nel caso non esistesse)
if(file_exists($nomeFile)){
    
    // con il metodo fopen vado ad accedere al file (primo valore -> nome del file, secondo valore -> la modalità di apertura )
    $referenzaFile = fopen($nomeFile , 'r');

    //con fread vado ad  chiudere in una variabile in contenuto del file (primo valore-> referenza del file , secondo valore -> quanto del file si va a prendere )
        // filesize per andare a prendere tutto il file (specificare il nome del file tra parentesi)
    $content = fread($referenzaFile, filesize($nomeFile));
    echo $content . '<br>';

    // fclose per chiudere il file (non è sicuro lasciarlo aperto)
    fclose($referenzaFile);

}else{

    echo 'il file non esiste';

}



// usiamo un if per fare un check per vedere se il file esiste (non serve per tutte le modalità di apertura in quanto alcune creano il file nel caso non esistesse)
if(file_exists($nomeFile)){
    
    // file_get_content serve per avere il contenuto del file senza dovere ne aprire ne chiudere (ha bisogno del nome del file)
    $contentDue = file_get_contents($nomeFile);
    echo $contentDue . '<br>';

}else{

    echo 'il file non esiste';

}


/* metodi

    fopen() per ad accedere al file (primo valore -> nome del file, secondo valore -> la modalità di apertura )
    fclose() per chiudere il file (non è sicuro lasciarlo aperto)
    file_get_content()  per avere il contenuto del file senza dovere ne aprire ne chiudere (ha bisogno del nome del file)
    fread()  per leggere nel file (primo valore -> referenza al file , secondo valore -> quanto del file si va a prendere )
    fwrite()  per scrivere nel file (primo valore -> referenza al file , secondo valore -> cosa aggiungere)
    file_put_content() per sostituire il testo senza dovere aprire e chiudere il file (primo valore -> nome del file , secondo valore -> cosa aggiungere)
    rename() per cambiare il nome del file (primo valore -> nome del file , secondo valore -> nome nuovo del file)
    unlink () per eliminare il file (valore -> nome del file )

*/



































?>