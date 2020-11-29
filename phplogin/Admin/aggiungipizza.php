<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet_admin.css">
    <link rel="stylesheet" href="Stylesheetaggiungipizza.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Scrivi la tua recensione</title>
</head>
<body>
<div>
<h1 class = "title">Pizzeria Il Diavolo</h1>
    <div class="container">
        <form action="insertpizza.php", method="POST">
            <label for="name">Nome Pizza </label>
            <input type="text" id="name" name="Nome_Pizza" placeholder="Introduci Nome Pizza - (altrimenti scrivere 'Anonimo')">
            <label for="ing">Ingredienti</label>
            <input type="text" id="ing" name="Ingredienti" placeholder="Introduci Ingredientt - Ex: Mozzarella, Pomodoro,...">
            <label for="prz">Prezzo</label>
            <input type="text" id="prz" name="Prezzo" placeholder="Introduci Prezzo (solo numero) - Ex: 11 ">
            <input type="submit" value="Aggiungi">
        </form>
  </form>
    </div>
</div>
<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>