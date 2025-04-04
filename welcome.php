<?php
session_start(); // Start sesjonen for å få tilgang til brukerinformasjon

// Sjekk om brukeren er logget inn
if (!isset($_SESSION['bruker_id'])) {
    header("Location: login.php"); // Hvis ikke logget inn, omdiriger til login-siden
    exit();
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Velkommen</title>
</head>
<body>
    <h1>Velkommen, <?php echo $_SESSION['brukernavn']; ?>!</h1>
    <p>Du er nå logget inn på rating siden.</p>
    <a href="logout.php">Logg ut</a>
</body>
</html>


