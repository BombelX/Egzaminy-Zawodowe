<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piłka Nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <div class="left">
        <form action="liga.php" method="post">
            <select name="pozycja" id="poz">
                <option value="1">Bramkarze</option>
                <option value="2">Obrońcy</option>
                <option value="3">Pomocnicy</option>
                <option value="4">Napastnicy</option>
            </select>
            <button type="submit">Zobacz</button>
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor : 8271673219873</p>
    </div>
    <div class="right">
        <ol>
            <?php
                $pozycja = $_POST['pozycja'];
                if ($pozycja != ''){
                    $conn = mysqli_connect('localhost', 'root', '', 'egzamin') or die(mysqli_connect_error());
                    $query = "SELECT `imie`,`nazwisko` FROM `zawodnik` WHERE `pozycja_id` = $pozycja";
                    $res = mysqli_query($conn, $query);
                    mysqli_close($conn);
                    for ($i=0 ; mysqli_num_rows($res)>$i; $i++) {
                        $row = mysqli_fetch_array($res);
                        echo("<li><p>$row[0] $row[1]</p></li>");

                    }
                }

            ?>

        </ol>
    </div>
    <main><h3>Liga mistrzów</h3></main>
    <div class="liga">

            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'egzamin') or die(mysqli_connect_error());
                $query = "SELECT `zespol`,`punkty`,`grupa` FROM `liga` ORDER BY `punkty` DESC;";
                $res = mysqli_query($conn, $query);
                mysqli_close($conn);
                for ($i=0 ; mysqli_num_rows($res)>$i; $i++) {
                    $row = mysqli_fetch_array($res);
                    echo("
                    <div class='gen'>
                    <h2>$row[0]</h2>
                    <h1>$row[1]</h1>
                    <p>grupa $row[2]</p>
                    
                    </div>");
                }
                

            ?>

    </div>

</body>
</html>