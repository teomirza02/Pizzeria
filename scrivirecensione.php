<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="Stylesheetscrivirecensione.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Scrivi la tua recensione</title>
</head>
<body>
<div>
<h1 class = "title">Pizzeria Il Diavolo</h1>
    <div class="container">
        <form action="insertcomm.php", method="POST">
            <label for="name">Cognome e Nome </label>
            <input type="text" id="name" name="cognomenome" placeholder="Introduci il tuo Cognome e Nome - (altrimenti scrivere 'Anonimo')">
            <label for="comm">Commento</label>
            <input type="text" id="commento" name="commento" placeholder="Introduci il tuo Commento..">
            <label for="comm">Nome Pizza</label>
            <select id="pizze" name="pizze">
            <option value="Altro">Altro</option>
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

                $sql = "SELECT `Nome_Pizza` FROM `Pizze`";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    echo "<option value=\"".$row["Nome_Pizza"]."\">" . $row["Nome_Pizza"] . "</option>";
                }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
            
            </select>

            <label for="value">Choose a Value: - (Default:0)</label>
            <select id="value" name="valutazione">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
            </select>
            <input type="submit" value="Scrivi">
        </form>
  </form>
    </div>
</div>
<footer class="endfooter">
  Copyright &copy; 2020 Mirza Toader, All Rights Reserved.
</footer>

</body>
</html>