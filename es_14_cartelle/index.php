<?php 

$nomeCartella ='cartellaProva';
$nomefile= 'fileDaCopiare.txt';

// controlliamo l'esistenza della cartella
if (!file_exists($nomeCartella)) {
    
    // con mkdir creiamo la cartella
    if (mkdir($nomeCartella)) {
        echo 'cartella creata con successo' . '<br>';
    }else{
        echo 'errore nella creazione della cartella'. '<br>';
    }

}else{
    echo 'cartella non creata perchè esistente'. '<br>';
}




// controlliamo l'esistenza della cartella
if (file_exists($nomefile)) {
    
    // con copy copiamo un file (primo valore-> nome del file, secondo valore-> path da seguire)
    if (copy($nomefile, $nomeCartella . '/'. $nomefile )) {
        echo 'file copiato con successo' . '<br>';
    }else{
        echo 'errore nella copia del file'. '<br>';
    }

}else{
    echo 'file non copiato perchè inesistente'. '<br>';
}



// funzione che permette di mostrare a schermo i file presenti in un cartella e nelle sue sotto cartelle
function mostraFile($path){
    // controllo se il file esiste ed che il file sia una cartella con is_dir()
    if(file_exists($path) && is_dir($path)){

        // scandir restituisce sotto forma di array i contenuti di una cartella
        $result= scandir($path);

        // con array_diff vado rimuovere nell'array i file che non mi servono (le chiavi dell'array rimarranno quelle di partenza)
        $files = array_diff($result,['.','..'] );

        // mando a schermo l'array
        print_r($files);
        echo '<br>';

        // controllo che ci sia almeno un file nella cartella
        if(count($files) > 0){

            // ciclo i file contenuti nella cartella
            foreach ($files as $file) {

                // controllo che sia effettivamente un file
                if(is_file($path . '/' . $file)){

                    echo $file. '<br>';
                // controllo se sia una cartella se lo è richiamo la funzione e mostro i file al suo interno(se ci sono)
                }else if (is_dir($path . '/' . $file)){

                    mostraFile($path . '/' . $file);

                }
            }


        }else{

            echo ' non sono stati trovati file in questa cartella'. '<br>';
        }





    }else{
        echo ' la cartella non esiste';
    }

}

mostraFile($nomeCartella);

// con file glob possiamo cercare dei tipi di file specifici all'interno della cartella (* intendo qualsiasi cosa venga prima di .txt)
$files = glob('cartellaProva/*.txt');

// ciclo sui files
foreach ($files as $file){

    // con basename prendo il nome del file con filesize il peso del file in bytes
    echo basename($file) . ' ( size:' . filesize($file) . ' bytes )' . '<br>';
}

















































?>