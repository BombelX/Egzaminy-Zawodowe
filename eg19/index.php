<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane o zwierzetach</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspATLAS ZWIERZAT</h1>
    </header>
    <div class="form">
        <h2>&nbsp&nbspGromady</h2>
        <ol>
            <li>Ryby</li>
            <li>Plazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        <form action="index.php" method="post">
            <label for="grom">Wybierz Gromade :</label>
            <input type="number" name="grom" id="">
            <button type="submit">Wyświetl</button>
        </form>


    </div>
    <div class="left">
        <img src="Zwierzeta.jpg" alt="">
    </div>
    <div class="cent">
    <?php 
            $gromada = '';
            $gr = $_POST['grom'];
            $conn1 = mysqli_connect('localhost','root','','baza2');
            $query1 = "SELECT `gatunek`,`wystepowanie` FROM `zwierzeta` WHERE `Gromady_id` = $gr;";
            $res1 = mysqli_query($conn1,$query1);
            $nums = mysqli_num_rows($res1);
            switch ($gr){
                case 1:
                    $gromada = "Ryby";
                    break;
                case 2:
                    $gromada = "Plazy";
                    break;
                case 3:
                    $gromada = "Gady";
                    break;
                case 4:
                    $gromada = "Ptaki";
                    break;
                case 5:
                    $gromada = "Ssaki";
                    break;
            }
            $gromada  = strtoupper($gromada);
            echo "<h2>$gromada</h2>";
            for ($i=0;$nums>$i;$i++){
                $row1 = mysqli_fetch_row($res1);
                echo "$row1[0] , $row1[1]<br>";

            }
            mysqli_close($conn1);
        
        ?>
    </div>
    <div class="right">
        <h2>Wszystkie zwierzeta w bazie</h2>
        <?php 
        $conn = mysqli_connect('localhost','root','','baza2');
        $query = "SELECT `zwierzeta`.`id`,`gatunek`,`gromady`.`nazwa` FROM `zwierzeta` INNER JOIN `gromady` ON `Gromady_id` = `gromady`.`id` WHERE 1";
        $res = mysqli_query($conn,$query);
        $nums = mysqli_num_rows($res);
        for ($i=0;$nums>$i;$i++){
            $row = mysqli_fetch_row($res);
            echo "$row[0]. $row[1], $row[2]<br>";

        }
        mysqli_close($conn);
        ?>
    </div>
    <footer>autor Atlasu zwierzat : 123213123123</footer>
</body>
</html>