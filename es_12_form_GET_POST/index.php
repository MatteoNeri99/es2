<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- in action inseriamo il file in cui vogliamo inviare i dati -->
     <!-- in method inseriamo il metodo che vogliamo utilizzare per inviare i dati (GET chiamata che appende al URL ciò che stiamo cercando) (POST metodo che nasconde i dati) -->
    <form action="esempio.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name='nome' id="nome">

        <label for="cognome">Cognome</label>
        <input type="text" name='cognome' id="cognome">

        <label for="eta">Età</label>
        <input type="text" name='eta' id="eta">

        <button type="submit">Invia</button>
    </form>
    
</body>
</html>