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
    <title>rating</title>
</head>

<nav>
    <div class="nav-venstre">
   <a href="welcome.php">Hjem</a>
    </div>
    <div class="nav-høyre">
      <a href="gucci.php">Rate Gucci</a>
      <!--<a href="nike.php">Rate Nike</a>!-->
      <a href="adidas.php">Rate Adidas</a>
    </div>
  </nav>
  <p>stopper <br> stopper</p>

  <body>
    <center>
    <h1>Rate Adidas</h1>
    </center>


    <center>
    <table>
         <tr>
            <th>reklame 1</th>
            <th>reklame 2</th>
            <th>reklame 3</th>
         </tr>

         <tr>
            <td> <a href="https://cdn.markedsforing.dk/app/uploads/20240731125533/Skaermbillede-2024-07-31-kl.-12.05.42-930x623.png"><img src = "https://cdn.markedsforing.dk/app/uploads/20240731125533/Skaermbillede-2024-07-31-kl.-12.05.42-930x623.png" width="400" height="350" alt="adidas reklame 1"> </a></td>
            <td> <a href="https://blog.tbwa.dk/hs-fs/hubfs/fit-kjgi4BEH5A-945x495.jpeg?width=1890&name=fit-kjgi4BEH5A-945x495.jpeg"><img src = "https://blog.tbwa.dk/hs-fs/hubfs/fit-kjgi4BEH5A-945x495.jpeg?width=1890&name=fit-kjgi4BEH5A-945x495.jpeg" width="400" height="350" alt="adidas reklame 2"> </a></td>
            <td> <a href="https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/1272/cached.offlinehbpl.hbpl.co.uk/news/SUC/campaign_adidas-20150215115450780.jpg"><img src = "https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/1272/cached.offlinehbpl.hbpl.co.uk/news/SUC/campaign_adidas-20150215115450780.jpg" width="400" height="350" alt="adidas reklame 3"> </a></td>
         </tr>
    </table>
    </center>

    <center>
    <p>Rate en reklame om gangen, start teksten med "reklame 1 adidas" når du skal skrive inn på "tilbakemelding" og gjør det på alle 3</p>
    <form action="nike.php" method="POST">
        <input type="text" name="stjerne" placeholder="stjerne 1/5" required>
        <input type="text" name="tilbakemelding" placeholder="tilbakemelding" required>
        <button type="submit">send inn svar</button>
    </form>
    </center>
</body>
</html>

