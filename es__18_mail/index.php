<?php 

// inseriamo l'email della persona a cui docciamo inviare una mail
$to = 'emaildellapersonaacuiinviare@gmail.comm';

// l'oggettto dell'email
$subject = ' prova';

// il messaggio da inviare
$message = 'questa è un email di prova';

$from = 'emailedichiinvia@gmail.com';

// la funzione mail serve appunto per inviare un'email naturalmente ha bisogno di un email collegata con il sito (to, subject, message, headers, parameters)
if(mail($to,$subject,$message)){

    echo 'l\'email è stata inviato con successo ';

}else{

    echo ' ci è stato un errore nel invio dell\'email';

}

// possiamo poi inserire un messagio in html
$headers = 'MIME-Version 1.0' . '\r\n';
$headers .= 'Content-type: text/html; charset=iso-8859-1'. '\r\n';
$headers .= 'From: ' . $from . '\r\n';
$messageHtml = '<html><body>';
$messageHtml .= '<h1> atitolo pagina html </h1>';
$messageHtml .= '</body></html>';























































?>