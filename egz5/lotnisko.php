<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class='baner1'>
        <img src="zad5.png" alt="logo lotniska">
    </div>
    <div class='baner2'>
        <h1>Przyloty</h1>
    </div>
    <div class='baner3'>
        <h3>przydante linki</h3></br>
        <a target="_blank" href="zapytania.txt">Pobierz...</a>

    </div>
    <main>
        <table>
            <tr>
                <td>Czas</td>
                <td>Kierunek</td>
                <td>Numer Rejsu</td>
                <td>Status</td>
            </tr>
            <?php 
                $conn = mysqli_connect("localhost", 'root', '', 'egzam') or die("");
                $query = "SELECT `czas`,`kierunek`,`nr_rejsu`,`status_lotu` FROM `przyloty` ORDER BY `czas` ASC;";
                $result = mysqli_query($conn, $query) or die("");
                $num_of_row = mysqli_num_rows($result);
                for ($i = 0;$i<$num_of_row;$i++) {
                    $row = mysqli_fetch_array($result);
                    echo "<tr> <td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td> </tr>";
                }
                mysqli_close($conn) or die("");

            ?>
        </table>
    </main>
    <div class='foot1'>
        <?php 
        if ( !isset($_COOKIE['ciateczko']))
        {
            setcookie('ciateczko','True', time()+7200,'/');
            echo "<p><b>Dzień Dobry Strona Lotniska używa ciasteczek </b> </p>";
        }
        else{
            echo "<p><i>Witaj ponownie na stronie lotniska<i/> </p>";
        }
        ?>

    </div>
    <div class='foot2'>Autor: 897312796231786</div>
</body>
</html>