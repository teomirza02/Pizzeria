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
  $NomePizza = $_POST["Nome_Pizza"];
  $Ingredienti = $_POST["Ingredienti"];
  $Prezzo = $_POST["Prezzo"];

  $sql = "INSERT INTO `Pizze`(`Nome_Pizza`, `Ingredienti`, `Prezzo`) 
  VALUES ('". $NomePizza ."','". $Ingredienti ."','". $Prezzo ."')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  
  header('Location:menu_admin.php')

?>

</body>
</html>