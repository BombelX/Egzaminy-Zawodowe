<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty Samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div class='left'><h1>Odloty z lotniska</h1></div>        
        <div class='right'><img src="zad6.png" alt="logotyp"></div>
    </header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost","root","","egz");
            $query = "SELECT `id`,`nr_rejsu`,`czas`,`kierunek`,`status_lotu` FROM `odloty` WHERE 1 ORDER BY `czas` DESC;";
            $result = mysqli_query($conn, $query);
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                echo("<tr>");
                for($j=0;$j<5;$j++){
                    echo("<td>$row[$j]</td>");
                }
                echo("</tr>");
            }
            ?>
        </table>
    </main>
    <footer>
        <div class="foot1"><a href="kw1.jpg">Pobierz obraz</a></div>
        <div class="foot2">
            <?php 
            if(!isset($_COOKIE["visited"])) {
                setcookie("visited","true", time()+3600,"/");
                echo("<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>");
            } else {
                echo("<p><b>Miło nam, że nas znowu nas odwiedziles</b></p>");
            }
            
            ?>
        </div>
        <div class="foot3">Autor: 12872163891</div>
    </footer>
</body>
</html>