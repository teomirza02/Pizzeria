<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet_admin.css">
    <link rel="stylesheet" href="Stylesheetmenuadmin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>menu_admin</title>
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

<table>
 <tr>
    <th>IDPizza</th>
    <th>Nome Pizza</th>
    <th>Ingredienti</th>
    <th>Prezzo</th>
    <!-- <th class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> delete</a> -->
 </tr>

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

  $sql = "SELECT `IDPizza`, `Nome_Pizza`, `Ingredienti`, `Prezzo` FROM `Pizze` ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td class=\"#\">" . $row["IDPizza"] . "</td>";
      echo "<td class=\"#\">" . $row["Nome_Pizza"] . "</td>";
      echo "<td class=\"#\">" . $row["Ingredienti"] . "</td>";
      echo "<td class=\"#\">" . $row["Prezzo"] . ",00€</td>";
      echo "<td class=\"btn btn-sm btn-danger href=\"> Elimina</td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }





  $conn->close();
  ?>

</table>



<form method="get" action="aggiungipizza.php">
  <button class="block">Aggiungi Pizza</button>
</form>



<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>