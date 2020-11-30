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
  $IDPizza = (int)$_POST["IDPizza"];
  
  $sql = "DELETE FROM `Pizze` WHERE `IDPizza` = ". $IDPizza;
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