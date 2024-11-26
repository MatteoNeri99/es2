<?php 

// il ciclo for 
for ($i=0 ; $i < 5 ; $i++){

    echo 'numero ' . $i . '<br>';

}





// array assocciativo
$persona = [
    'nome' => 'Matteo',
    'cognome' => 'beffa',
    'eta' => 33
];
// il ciclo foreach viene utilizzato principalmente con gli array associativi
foreach ($persona as $chiave => $valore){

    echo $chiave . ': '. $valore . '<br>';

}





// il ciclo while molto simile al ciclo for, le istruzioni all'interno del while vengono eseguite soltanto se la condizione non risulta essere vera(finchè la condizione risulta essere vera esegui le istruzioni)
$i=0;
while ($i < 5){
    echo 'numero ' . $i . '<br>';
    $i++;
}





// differentemente dal while(semplice) il ciclo do while permette di eseguire le istruzioni almeno una volta prima di fermarsi
$z=10;
do{
    echo 'numero ' . $z . '<br>';
    $z++;
    
}while($z < 10);





// il ciclo for  in questo caso si blocca una volta arrivato al numero 3
for ($i=0 ; $i < 5 ; $i++){

    if ($i == 3){
        // il break viene utilizzato per bloccare ed uscire dal ciclo 
        break;
    }

    echo 'numero ' . $i . '<br>';

}





// il ciclo for  in questo caso  salta le istruzioni per una volta arrivato al numero 3
for ($i=0 ; $i < 5 ; $i++){

    if ($i == 3){
        // il continue viene utilizzato per 'saltare' le istruzioni 
        continue;
    }

    echo 'numero ' . $i . '<br>';

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>esempio di uso di un for in HTML </h1>

    <ul>

        <?php for ($i = 1 ; $i < 6 ; $i++ ) : ?>
            <li> elemento <?php echo $i ?></li>
        <?php endfor; ?>

    </ul>
    
</body>
</html>