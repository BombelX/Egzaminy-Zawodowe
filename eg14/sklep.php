<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">

</head>
<body>
    <div class="h-left">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div class="h-right">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl">soki</a></li>
        </ol>
    </div>
    
    <div class="maine">
        <?php 
        $conn = mysqli_connect('localhost','root','','dane2');
        $query = "SELECT `nazwa`,`ilosc`,`opis`,`cena`,`zdjecie` FROM `produkty` WHERE `Rodzaje_id`= 1 OR `Rodzaje_id`= 2;";
        $res = mysqli_query($conn,$query);
        $nu_rows = mysqli_num_rows($res);
        
        for($i=0;$nu_rows>$i;$i++){
            $row = mysqli_fetch_row($res);
            echo "<div class='bloc'>";
            echo "<img src='$row[4]' alt='warzywniak'>";
            echo "<h5>$row[0]</h5>";
            echo "opis: $row[2]";
            echo "na stanie: $row[1]";
            echo "<h2>$row[3]</h2>";
            echo "</div>";

        }
        mysqli_close($conn);
        ?>
    </div>
    <footer>
        <form action="sklep.php" method="post">
            <label for="name">Nazwa:</label>
            <input name="name" type="text">
            <label for="price">Cena:</label>
            <input type="text" name="price">
            <input type="submit" name="send" value="Dodaj Produkt">
            <p>Strone Wykonał : 6752367536517</p>
        </form>
        <?php 
        if (isset($_POST['send'])){
            $a = $_POST["name"];
            $b = $_POST["price"];
        }
        
        
        ?>
    </footer>
</body>
</html>