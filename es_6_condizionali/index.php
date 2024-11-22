<?php 

/*operatori di comparazione

< per vedere se è minore
> per vedere se è maggiore
<= per vedere se è minore o uguale
>= per vedere se è maggiore o uguale
== per vedere se il valore è uguale
=== per vedere sia se il valore che il tipo di dato sono uguali
!= per vedere se il valore è diverso 
!== per vedere se sia il valore che il tipo di dato siano diversi

*/

$numero_pari = 10;


// con if diamo una condizione, se il risultato è vero seguiamo le istruzioni scritte all'interno di if in caso contrario passiamo ad elseif o else
if( $numero_pari % 2 === 0 ){
    echo 'il numero è pari' . '<br>';
}else{
    echo ' il numero è dispari' . '<br>';
}

$numero_dispari=9;

// con elseif diamo un'altra condizione, se il risultato è vero seguiamo le istruzioni scritte all'interno di elseif
if( $numero_dispari % 2 === 0 ){
    echo 'il numero è pari' . '<br>';
}
elseif($numero_dispari % 2 === 1){
    echo ' il numero è dispari' . '<br>';
}

// con else diamo altre istruzioni nel caso in cui la condizione di if ed elseif non risultano essere vera
if( $numero_dispari % 2 === 0 ){
    echo 'il numero è pari' . '<br>';
}else{
    echo ' il numero  è dispari' . '<br>';
}




// si possono concatenare più if else 
if($numero_pari < 20){

    if( $numero_pari % 2 === 0 ){
        echo 'il numero è pari e minore di 20' . '<br>';
    }else{
        echo ' il numero è dispari e minore di 20' . '<br>';
    }

}else{
    echo 'il numero non è valido' . '<br>';
}




// usiamo l'operatore logico AND ( && ) per controllare più di una cosa alla volta contemporaneamente (per eseguire le istruzioni entrambe le condizioni devono essere vere)
if ($numero_pari < 20 && $numero_pari % 2 === 0){

    echo 'il numero è pari e minore di 20' . '<br>';

}elseif ($numero_pari < 20 && $numero_pari % 2 === 1){

    echo 'il numero è dispari e minore di 20' . '<br>';

}else{

    echo 'il numero non è valido' . '<br>';
}

// usiamo l'operatore logico OR ( || ) per controllare se almeno una delle due condizioni risulti vera
if( $numero_pari < 5 || $numero_pari % 2 === 0 ){

    echo 'numero valido'  . '<br>';;

}else{

    echo 'numero non valido'  . '<br>';;
}

// abbiamo usato l'operatore logioco NOT ( ! ) per controllare se la condizione risultasse falsa, se falsa esegue le istruzioni dentro if se è vera va avanti
if (! (is_numeric($numero_pari)) ){

    echo 'non è un numero ' . '<br>';

}else{

    echo ' è un numero ' . '<br>';
}




$numero_random = rand(0,20);

// switch lo usiamo quando abbiamo dei casi più specifici (in questo caso vinci se hai uno dei numeri) in case scriviamo ciò che un caso che permette di uscire. con breack blocchiamo e usciamo quando abbiamo trovato ciò che ci serviva. Default è ciò che accade in tutti gli altri casi
switch ($numero_random){

    case 10:
        echo $numero_random . ' hai vinto';
    break;
    case 8:
        echo $numero_random . ' hai vinto';
    break;
    case 6:
        echo $numero_random . ' hai vinto';
    break;
    case 4:
        echo $numero_random . ' hai vinto';
    break;
    case 2:
        echo $numero_random . ' hai vinto';
    break;
    default:
        echo $numero_random . ' hai perso';


}


?>


<!-- metodo in cui si usa if else in html(le regole rimangono le stesse) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php $numero= 2; ?>

    <?php  if ($numero > 2 ) : ?>

        <p>il numero è maggiore di 2</p>

    <?php elseif ($numero < 2 ) : ?>

        <p>il numero è minore di 2</p>

    <?php elseif (! ($numero < 2 || $numero > 2) ) : ?>

        <p>il numero è 2</p>

    <?php endif;?>



    
</body>
</html>