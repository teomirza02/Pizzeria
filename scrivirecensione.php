<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="Stylesheetscrivirecensione.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Scrivi la tua recensione</title>
</head>
<body>
<div>
<h1 class = "title">Pizzeria Il Diavolo</h1>
    <div class="container">
        <form action="insertcomm.php", method="POST">
            <label for="name">Cognome e Nome </label>
            <input type="text" id="name" name="cognomenome" placeholder="Introduci il tuo Cognome e Nome - (altrimenti scrivere 'Anonimo')">
            <label for="comm">Commento</label>
            <input type="text" id="commento" name="commento" placeholder="Introduci il tuo Commento..">
            <input type="submit" value="Scrivi">
        </form>
  </form>
    </div>
</div>
<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>