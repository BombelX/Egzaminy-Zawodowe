<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <div class="left">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div class="center">
        <h1>GALERIA</h1>
        <?php 
        $conn = mysqli_connect('localhost','root','','egzamin3');
        $query = "SELECT `nazwaPliku`,`podpis` FROM `zdjecia` ORDER BY `podpis` ASC;";
        $res = mysqli_query($conn,$query);
        $lines_num = mysqli_num_rows($res);
        for($i=0;$i<$lines_num;$i++){
            $row = mysqli_fetch_row($res);
            echo "<img src='$row[0]' alt='$row[1]'>";
        }
        mysqli_close($conn);

        ?>
    </div>
    <div class="right">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </div>
    <div class="wycieczki">
        <h2>LISTA WYCIECZEK</h2>
        <?php 
        $conn = mysqli_connect('localhost','root','','egzamin3');
        $query = "SELECT `id`,`dataWyjazdu`,`cel`,`cena` FROM `wycieczki` WHERE `dostepna` = 1;";
        $res = mysqli_query($conn,$query);
        $lines_num = mysqli_num_rows($res);
        for($i=0;$i<$lines_num;$i++){
            $row = mysqli_fetch_row($res);
            echo "<p>$row[0]. $row[1], $row[2], cena: $row[3]</p>";
        }
        mysqli_close($conn);

        ?>
    </div>
    <footer>
        <p>Strone Wykonał 67861293216</p>
    </footer>
    
</body>
</html>