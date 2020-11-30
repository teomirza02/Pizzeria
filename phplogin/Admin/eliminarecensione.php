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
  $IDCommento = (int)$_POST["IDCommento"];
  
  $sql = "DELETE FROM `Commenti` WHERE `IDcommento` = ". $IDCommento;
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  
  header('Location:recensioni_admin.php')

?>

</body>
</html>