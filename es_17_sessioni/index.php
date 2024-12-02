<?php 

// le sessioni sono dati temporanei salvati sul server (dati sempre inerenti all'utente) es:con le sessioni possiamo controllare se l'utente ha accesso ad una pagina

// cominciare una sessione
session_start();

// usiamo una super variabile globale $_SESSION per accedere e settare una sessione
$_SESSION['user_id']= 27;

echo $_SESSION['user_id'];

// con unset() andiamo a rimuovere il valore alla sessione
unset($_SESSION['user_id']);

echo $_SESSION['user_id'];

// usiamo session_destroy 'distruggiamo', chiudiamo la sessione
session_destroy();














































?>