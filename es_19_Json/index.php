<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>JSON</h1>

    <script>
        // alla creazione dell apge creo una variabile new FormData
        let formData = new FormData();
        // con la funzione .append per l'appunto gli appendo dei dati proveninti da pokedex.json
        formData.append('data', 'colori');

        // con ffetch stabilisco dove prendere i dati(file esempio.php) con che method li prendo (method POST) e il body dei dati (variabile formData)
        fetch('esempio.php', {
            method: 'POST',
            body: formData
        })
        // riceviamo la risposta e lo trasformiamo in un json
        .then(response => response.json())
        // lo mandiamo a schermo con un console.log
        .then(data => console.log(data));

    </script>

</body>
</html>