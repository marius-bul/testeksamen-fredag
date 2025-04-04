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
    $brukernavn = $_POST['brukernavn'];
    $passord = password_hash($_POST['passord'], PASSWORD_DEFAULT); // Hasher passordet

    // Sett inn bruker i databasen
    $sql = "INSERT INTO brukere (brukernavn, passord) VALUES ('$brukernavn', '$passord')";
    

    
    if ($conn->query($sql) === TRUE) {
        echo "Bruker registrert! <a href='login.php'>Logg inn her</a>";
    } else {
        echo "Feil: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrering</title>
</head>
<body>
    <h1>Registrer deg</h1>
    <form action="registrer.php" method="POST">
        <input type="text" name="brukernavn" placeholder="Brukernavn" required tabindex="1">
        <input type="password" name="passord" placeholder="Passord" required tabindex="2">
        <button type="submit" tabindex="3">Registrer</button>
    </form>
    <a href="welcome.php"tabindex="4" >tilbake</a>
</body>
</html>