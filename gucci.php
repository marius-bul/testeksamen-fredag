<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Koble til databasen
    $host = "localhost";
    $user = "root";
    $pass = "Passord1!";
    $db = "server";
    
    $conn = new mysqli($host, $user, $pass, $db);

    // Sjekk tilkobling
    if ($conn->connect_error) {
        die("Tilkoblingsfeil: " . $conn->connect_error);
    }

    // Hent data fra skjemaet
    $stjerner = $_POST['stjerne'];
    $tilbakemelding = $_POST['tilbakemelding'];

    // Sett inn bruker i databasen
    $sql = "INSERT INTO rating (stjerner, tilbakemelding) VALUES ('$stjerner', '$tilbakemelding')";
    
    $resultat = $conn->query($sql);

    
    if ($conn->query($sql) === TRUE) {
        echo "Svar sendt!";
    } else {
        echo "Svaret ble ikke registert " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <title>Registrering</title>
</head>

<nav>
    <div class="nav-venstre">
   <a href="welcome.php">Hjem</a>
    </div>
    <div class="nav-høyre">
      <a href="gucci.php">Rate Gucci</a>
      <a href="nike.php">Rate Nike</a>
      <a href="adidas.php">Rate Adidas</a>
    </div>
  </nav>
  <p>stopper <br> stopper</p>
