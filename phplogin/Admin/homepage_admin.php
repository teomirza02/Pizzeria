<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: phplogin/index.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet_admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>homepage_admin</title>
</head>
<body>
<div>
    <h1 class = "title">Pizzeria Il Diavolo</h1>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="homepage_admin.php">Home</a></li>
      <li><a href="menu_admin.php">Menu </a></li>
      <li><a href="contatti_admin.php">Contatti</a></li>
      <li><a href="#">Recensioni</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class= "part2 backimg">
  <div class="aboutus">
    <h2>Chi siamo?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit
    Integer a turpis suscipit, eleifend dui ac, sodales leo. Etiam sodales facilisis elit, eget tincidunt ante semper a. Nunc fermentum sed dui ut commodo. 
    Nunc vitae suscipit urna, eget rhoncus nisl. Pellentesque et sem eu enim blandit fringilla in a purus. Phasellus dignissim pellentesque urna, in maximus velit consectetur ut. 
    Donec gravida vel tortor eu mattis. Curabitur convallis nulla eget hendrerit placerat. 
    Donec augue sem, venenatis et massa at, tincidunt feugiat mauris. Suspendisse ligula arcu, volutpat sed enim non, lacinia semper ligula.
    </p>
  </div>
  <div class="aboutus">
    <h2>La nostra cucina</h2>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit
    Integer a turpis suscipit, eleifend dui ac, sodales leo. Etiam sodales facilisis elit, eget tincidunt ante semper a.
    Nunc fermentum sed dui ut commodo. 
    </p>
  </div>
</div>

<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>