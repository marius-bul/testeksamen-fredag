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
    <h1>Rate Nike</h1>
    </center>


    <center>
    <table>
         <tr>
            <th>reklame 1</th>
            <th>reklame 2</th>
            <th>reklame 3</th>
         </tr>

         <tr>
            <td> <a href="https://kampanje.com/globalassets/scanpix/merkevarer/colin-kaepernick-nike-reuters.jpg?format=webp&width=980&quality=90"><img src = "https://kampanje.com/globalassets/scanpix/merkevarer/colin-kaepernick-nike-reuters.jpg?format=webp&width=980&quality=90" width="400" height="350" alt="nike reklame 1"> </a></td>
            <td> <a href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgajCSW00jr6kOoLxnCxEKrn6HbRjHMU0yQ3FR9wqIvUp2iIbuoR0xWjwL-PPyteB2n-3bgfsP74Pnvd4MGI9kzPzdjFLxvPBUcjqms2vxJGXA5QLFeyRSW0nRMkqfBSK688Mascu1Ovnsm/s1600/Nike.jpg"><img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgajCSW00jr6kOoLxnCxEKrn6HbRjHMU0yQ3FR9wqIvUp2iIbuoR0xWjwL-PPyteB2n-3bgfsP74Pnvd4MGI9kzPzdjFLxvPBUcjqms2vxJGXA5QLFeyRSW0nRMkqfBSK688Mascu1Ovnsm/s1600/Nike.jpg" width="400" height="350" alt="nike reklame 2"> </a></td>
            <td> <a href="https://imgproxy.finans.dk/6Vip4M7Wf_GKij_ua9pwVQcVSBu0v3_n8dZwATR3bu8/resize:fill:940:0:0/plain/https%3A%2F%2Fbilleder.finans.dk%2Fpictures%2Fimage%2F12181010%2Fuqt8mw%2FALTERNATES%2Fmaster-3_2%2Fkina"><img src = "https://imgproxy.finans.dk/6Vip4M7Wf_GKij_ua9pwVQcVSBu0v3_n8dZwATR3bu8/resize:fill:940:0:0/plain/https%3A%2F%2Fbilleder.finans.dk%2Fpictures%2Fimage%2F12181010%2Fuqt8mw%2FALTERNATES%2Fmaster-3_2%2Fkina" width="400" height="350" alt="nike reklame 3"> </a></td>
         </tr>
    </table>
    </center>

    <center>
    <p>Rate en reklame om gangen, start teksten med "reklame 1 nike" når du skal skrive inn på "tilbakemelding" og gjør det på alle 3</p>
    <form action="nike.php" method="POST">
        <input type="text" name="stjerne" placeholder="stjerne 1/5" required>
        <input type="text" name="tilbakemelding" placeholder="tilbakemelding" required>
        <button type="submit">send inn svar</button>
    </form>
    </center>
</body>
</html>

