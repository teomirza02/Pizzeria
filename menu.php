<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="Stylesheetmenu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>menu</title>
</head>
<body>
<div>
    <h1 class = "title">Pizzeria Il Diavolo</h1>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="homepage_public.php">Home</a></li>
      <li><a href="#">Menu </a></li>
      <li><a href="contatti.php">Contatti</a></li>
      <li><a href="recensioni_public.php">Recensioni</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div>
  <h1 class="stiletitolo" >Il nostro menu</h1>
  
<?php
  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $db="Pizzeria";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT `Nome_Pizza`, `Ingredienti`, `Prezzo` FROM `Pizze`";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      echo "<p class=\"stilepizzetit\">" . $row["Nome_Pizza"] . "</p>";
      echo "<p class=\"stilepizzeing\">" . $row["Ingredienti"] . "</p>";
      echo "<p class=\"stilepizzeing\">" . $row["Prezzo"] . ",00€</p>";

    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</div>



<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>





