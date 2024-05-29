<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="left-header"><h2>Nasze osiedle</h2></div>
    <div class="right-header">
        <?php 
            $conn = mysqli_connect('localhost', 'root', '','portal');
            $query = "SELECT COUNT(`id`) FROM `dane` WHERE 1;";
            $res = mysqli_query($conn, $query) ;
            $res = mysqli_fetch_row($res);
            echo "Liczba użytkowników portalu: $res[0]";
            mysqli_close($conn);
        ?>
    </div>
    <div class="left">
        <h3>Logowanie</h3>
        <form action="uzytkownicy.php" method="post">
            <label for="login">login</label><br>
            <input type="text" name="login" id=""><br>
            <label for="haslo">hasło</label><br>
            <input type="text" name="haslo" id=""><br>
            <button type="submit">Zaloguj</button>
        </form>
    </div>
    <div class="right">
        <h3>Wizytówka</h3>
        <?php
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            if ($login!='' && $haslo != '' ){
                $conn = mysqli_connect('localhost', 'root', '','portal');
                $query = "SELECT `login`,`haslo`,`dane`.`id`,`dane`.`rok_urodz`,`dane`.`rok_urodz`,`dane`.`przyjaciol`,`dane`.`hobby` FROM `uzytkownicy` INNER JOIN `dane` ON `uzytkownicy`.`id` = `dane`.`id` WHERE `login` = '$login';";
                $res = mysqli_query($conn, $query) ;
                mysqli_close($conn);
                if (mysqli_num_rows($res) == 0){
                    echo "login nie istnieje";
                }
                else{
                    $row = mysqli_fetch_row($res) ;
                    if (sha1($haslo) == $row[1]){
                        echo"<div class='wizytowka'>";
                        echo "<img src='o$row[2].jpg' alt='osoba'>";
                        $age =  2022 - intval($row[2]) ; 
                        echo "<h4>$row[0]($age)</h4>";
                        echo "<p>hobby: $row[6]</p>";
                        echo  "<h1><img src='icon-on.png' alt='serce'> $row[5]</h1>";
                        echo "<form action='dane.html'><input class='but' type='submit' value='Wiecej informacji'/> </form>";
                        echo"</div>";


                    }
                    else{
                        echo "Niepoprawne hasło";
                    }

                }
                // $res = mysqli_fetch_row($res);
                // echo "Liczba użytkowników portalu: $res[0]";

            }
        
        
        ?>



    </div>
    <footer>
        <p>Strone Wykonał : 1231233412</p>
    </footer>
    
</body>
</html>