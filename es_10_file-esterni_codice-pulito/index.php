<!-- utilizziamo require o include 'path del file da impostere' per importare un file (serve per avere un codice 'mantenibile'), molto comodo anche per riutilizzare lo stesso pezzo di codice(componente) in diverse pagine (header , main, footer, ecc...)-->
 <!-- include è per file più opzionali -->
  <!-- require è per file indispensabili   -->
   <!-- include_once/require_once per evitare di importare più volte lo stesso file -->
<?php require 'function.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Pagina index.php</h1>

    <p><?php saluta()?></p>
    
</body>
</html>