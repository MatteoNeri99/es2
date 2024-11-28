<?php 


// verifichiamo che il metodo ustao per caricare l'immagine sia POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // controlliamo se la variabile $_FILES è definita poi controlliamo che non ci siano errori in $_FILES
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){

        // dico quali sono le estensioni permesse per il tipo di file che l'utente andrà a inserire
        $estensioniPermesse= ['jpg'=> 'image/jpg' , 'jpeg'=> 'image/jepg' , 'gif'=> 'image/gif', 'png'=> 'image/png'];
        // rachhiudo sotto variabile un nome al file
        $nomeFile= $_FILES['photo']['name'];
        // racchiudo sotto variabile il tipo di file
        $tipoFile = $_FILES['photo']['type'];
        // racchiudo sotto variabile il tipo di file
        $dimesioneFile = $_FILES['photo']['size'];
        
        
        // racchiudo in una variabile l'estensione del file
        $estensione = pathinfo($nomeFile, PATHINFO_EXTENSION);
        // controllo se l'estensione del file inserito sia tra quelle permesse nel caso non fosse cosi blocco tutto con il die e stampo il messaggio di errore
        if(!array_key_exists($estensione, $estensioniPermesse)) die ('Errore : seleziona un formato valido');


        // racchiudo in una variabile la grandezza massima di 5 MB 
        $dimensioneMassima = 5 * 1024 * 1024;
        // verifico che la grandezza del file inserito non superi quella massima nel caso non fosse cosi blocco tutto con il die e stampo il messaggio di errore
        if ($dimesioneFile > $dimensioneMassima) die ('Errore: La grandezza è superiore al limite di 5 MB');


        // verifichiamo il tipo di MIME (Multipurpose Internet Mail Exchange servono a istruire un browser web o applicazione di posta sul modo in cui gestire i file ricevuti da un server)
        if (in_array($tipoFile, $estensioniPermesse)){

            // controllo se il file non esiste già
            if(file_exists('upload_img/'. $nomeFile)){

                 echo $nomeFile . 'il file è già stato caricato' .'<br>';

            }else{

                move_uploaded_file($_FILES['photo']['tmp_name'], 'upload_img/' . $nomeFile);
                echo 'echo il file è stato caricato con successo' .'<br>';
                
            }
                
        }else{

            echo 'ci è stato un problema con il caricamento' . '<br>';

        }

    }else{
        echo 'Errore: ' . $_FILES['photo']['error'];
    }
}


?>

