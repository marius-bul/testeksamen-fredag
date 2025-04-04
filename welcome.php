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
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <title>Velkommen</title>
</head>
<body>
<!-- navigasjonsbaren min !-->
<nav>
    <div class="nav-venstre">
   <!--<a href="#">Hjem</a>!-->
    </div>
    <div class="nav-høyre">
      <a href="gucci.php" tabindex="1">Rate Gucci</a>
      <a href="nike.php" tabindex="2">Rate Nike</a>
      <a href="adidas.php" tabindex="3">Rate Adidas</a>
    </div>
  </nav>
  <p>stopper <br> stopper</p>

  
  <!-- Det brukeren ser på siden!-->
   <center>
  <h1>Velkommen, <?php echo $_SESSION['brukernavn']; ?>!</h1>

  <p>Du er nå logget inn på rating siden, når du føler deg klar trykk på en av merkene oppe til høyre og begynn og rate!</p>
  <center>


</body>

<script src = "raintg.js"></script>
</html>


