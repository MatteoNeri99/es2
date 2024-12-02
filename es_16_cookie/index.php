<?php 

// cookie sono file di testo che vengono salvati sul dispositivo, servono per mantenere le preferenze di un utente (naturalmente non possono contenere dati sensibili)

// con il metodo setcookie andiamo a salvare un coockie(primo valore-> nome del coockie, secondo valore-> la preferenza scelta dall'utente(che poi sarà il valore), terzo valore-> per quanto tempo viene salvato)
setcookie('username', 'Marcello89', time()+60*60*24*30);



// con un if andiamo a controllare se esiste
if(isset($_COOKIE['username'])){

    // si accede con la variabile super globale $_COOKIE['nome del cookie]
    echo $_COOKIE['username'];

}else{
    echo ' cookie non trovato';
}

// per rimuovere un cookie bastera usare setcookie() con un timeSTAMP al passato
setcookie('username', '', time()-3600);








































?>