<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="Stylesheetrecensioni.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>recensioni</title>
</head>
<body>
<div>
    <h1 class = "title">Pizzeria Il Diavolo</h1>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="homepage_public.php">Home</a></li>
      <li><a href="menu.php">Menu </a></li>
      <li><a href="contatti.php">Contatti</a></li>
      <li><a href="#">Recensioni</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/opt/lampp/htdocs/Pizzeria/Admin/phplogin/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div>
    <h1 class="recensioni">Recensioni</h1>
    <div class="recensionetipo">
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

        $sql = "SELECT `NomeUtente`, `Data`, `Testo` FROM `Commenti` ORDER BY IDCommento DESC LIMIT 30";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        
          while($row = $result->fetch_assoc()) {
            echo "<p class=\"part1\">" . $row["NomeUtente"] . "</p>";
            echo "<p class=\"part2\">" . $row["Testo"] . "</p>";
            echo "<p class=\"part3\">" . $row["Data"] ."</p>";

          }
        } else {
          echo "0 results";
        }





        $conn->close();
      ?>
    </div>
</div>
<form method="get" action="scrivirecensione.php">
  <button class="block">Scrivi un commento</button>
</form>


<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>