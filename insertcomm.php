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

  $sql = "INSERT INTO `Commenti`(`NomeUtente`, `Data`, `Testo`) VALUES 
  ('". $utente ."','". date("Y-m-d") ."','". $commento ."')";
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