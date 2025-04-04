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

  <p>Du er nå logget inn på rating siden, når du føler deg klar trykk på en av merkene oppe til høyre og begynn å rate!</p>
  <center>


<table>
  <tr>
      <td> <a href="https://cdn.markedsforing.dk/app/uploads/20240731125533/Skaermbillede-2024-07-31-kl.-12.05.42-930x623.png"><img src = "https://cdn.markedsforing.dk/app/uploads/20240731125533/Skaermbillede-2024-07-31-kl.-12.05.42-930x623.png" width="420" height="350" alt="adidas reklame 1"> </a></td>
      <td> <a href="https://kampanje.com/globalassets/scanpix/merkevarer/colin-kaepernick-nike-reuters.jpg?format=webp&width=980&quality=90"><img src = "https://kampanje.com/globalassets/scanpix/merkevarer/colin-kaepernick-nike-reuters.jpg?format=webp&width=980&quality=90" width="420" height="350" alt="nike reklame 1"> </a></td>
      <td> <a href="https://soundvenue.com/wp-content/uploads/2020/09/Gucci-2192x1233.jpg?v=1601461297"><img src = "https://soundvenue.com/wp-content/uploads/2020/09/Gucci-2192x1233.jpg?v=1601461297" width="420" height="350" alt="gucci reklame 1"> </a></td>
  </tr>
</table>

<button id="knapp">Trenger hjelp?</button>


</body>

<script src = "raintg.js"></script>
</html>


