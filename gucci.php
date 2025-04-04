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
      <!--<a href="gucci.php">Rate Gucci</a>!-->
      <a href="nike.php">Rate Nike</a>
      <a href="adidas.php">Rate Adidas</a>
    </div>
  </nav>
  <p>stopper <br> stopper</p>

  <body>
    <center>
    <h1>Rate gucci</h1>
    </center>


    <center>
    <table>
         <tr>
            <th>reklame 1</th>
            <th>reklame 2</th>
            <th>reklame 3</th>
         </tr>

         <tr>
            <td> <a href="https://www.interoptik.no/globalassets/kampanje/merkevarefokus/gucci/digital_interoptik-guc-fw22_website_w-3000-x-h-1500px.jpg?transform=DownFit&width=1800"><img src = "https://www.interoptik.no/globalassets/kampanje/merkevarefokus/gucci/digital_interoptik-guc-fw22_website_w-3000-x-h-1500px.jpg?transform=DownFit&width=1800" width="400" height="350" alt="gucci reklame 1"> </a></td>
            <td> <a href="https://scontent.fsvg1-1.fna.fbcdn.net/v/t39.30808-6/471409371_1856210638469445_8362207904582359297_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=oPNfixPAZ48Q7kNvwHQ8QGg&_nc_oc=AdlGkh_k2xmmrxHRcbvqFr_6akhJTtChBb7J6nqXZu9liPmdbx7XVe6NFvSxMA-qpYs&_nc_zt=23&_nc_ht=scontent.fsvg1-1.fna&_nc_gid=PB-KEtZ4I6z_Yygtn7dkqQ&oh=00_AYGR5zrEKLi0eBLurLVjpuxrH_GHhGB-GVXiX3NqDhJzqw&oe=67F5563B"><img src = "https://scontent.fsvg1-1.fna.fbcdn.net/v/t39.30808-6/471409371_1856210638469445_8362207904582359297_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=oPNfixPAZ48Q7kNvwHQ8QGg&_nc_oc=AdlGkh_k2xmmrxHRcbvqFr_6akhJTtChBb7J6nqXZu9liPmdbx7XVe6NFvSxMA-qpYs&_nc_zt=23&_nc_ht=scontent.fsvg1-1.fna&_nc_gid=PB-KEtZ4I6z_Yygtn7dkqQ&oh=00_AYGR5zrEKLi0eBLurLVjpuxrH_GHhGB-GVXiX3NqDhJzqw&oe=67F5563B" width="400" height="350" alt="gucci reklame 2"> </a></td>
            <td> <a href="https://soundvenue.com/wp-content/uploads/2020/09/Gucci-2192x1233.jpg?v=1601461297"><img src = "https://soundvenue.com/wp-content/uploads/2020/09/Gucci-2192x1233.jpg?v=1601461297" width="400" height="350" alt="gucci reklame 3"> </a></td>
         </tr>
    </table>
    </center>

    <center>
    <p>Rate en reklame om gangen, start teksten med "reklame 1 gucci" når du skal skrive inn på "tilbakemelding" og gjør det på alle 3</p>
    <form action="gucci.php" method="POST">
        <input type="text" name="stjerne" placeholder="stjerne 1/5" required>
        <input type="text" name="tilbakemelding" placeholder="tilbakemelding" required>
        <button type="submit">send inn svar</button>
    </form>
    </center>
</body>
</html>


