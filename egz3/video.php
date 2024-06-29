<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video on Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="header-left">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div class="header-right">
        <table>
        <tr>
            <td>Kryminał</td>
            <td>Horror</td>
            <td>Przygodowy</td>
        </tr>
        <tr>
            <td>20</td>
            <td>30</td>
            <td>20</td>
        </tr>
        </table>
    </div>
    <div class="polecamy">
        <h3>Polecamy</h3>
        <?php 
        $conn = mysqli_connect('localhost', 'root', '','dane3');          
        $query = "SELECT `id`,`nazwa`,`opis`,`zdjecie` FROM `produkty` WHERE `id` in (18,22,23,25);";
        $results = mysqli_query($conn, $query);
        $nu = mysqli_num_rows($results);
        for ($i = 0;$i<$nu;$i++){
            $row = mysqli_fetch_row($results);
            echo "<div class='film'>";
            echo "<h4>$row[0].$row[1]</h4>";
            echo "<img src='$row[3]' alt='film'>";
            echo "<p>$row[2]</p>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>
    </div>
    <div class="fantastyczne">
        <h3>Filmy Fantastyczne</h3>
        <?php 
        $conn = mysqli_connect('localhost', 'root', '','dane3');          
        $query = "SELECT `id`,`nazwa`,`opis`,`zdjecie` FROM `produkty` WHERE `Rodzaje_id` = 12;";
        $results = mysqli_query($conn, $query);
        $nu = mysqli_num_rows($results);
        for ($i = 0;$i<$nu;$i++){
            $row = mysqli_fetch_row($results);
            echo "<div class='film'>";
            echo "<h4>$row[0].$row[1]</h4>";
            echo "<img src='$row[3]' alt='film'>";
            echo "<p>$row[2]</p>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>
    </div>
    <footer>
        <form action="video.php" method="post">
            <label for="usun">Usuń film nr.:</label>
            <input type="number" name="usun">
            <button type="submit">Usuń film</button>
            <br>
            <p>Strone wykonał :1968734123789</p>
        </form>
        <?php 
        $id  = $_POST['usun'];
        if ($id != NAN)
            $conn = mysqli_connect('localhost', 'root', '','dane3');          
            $query = "DELETE FROM `produkty` WHERE `id`= $id;";
            mysqli_query($conn, $query);
            mysqli_close($conn);
        ?>
    </footer>
</body>
</html>