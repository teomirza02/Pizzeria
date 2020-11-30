<html>
<body>

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
  $utente = $_POST["cognomenome"];
  $commento = $_POST["commento"];
  $nomepizza = $_POST["pizze"];
  $valutazione = $_POST["valutazione"];

  $sql = "INSERT INTO `Commenti`(`NomeUtente`, `Data`, `Testo`, `FK_Nome_Pizza`, `Valutazione`) VALUES 
  ('". $utente ."','". date("Y-m-d") ."','". $commento . "',' ". $nomepizza ."', " . $valutazione . ")";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  
  header('Location:recensioni_public.php')

?>

</body>
</html>