<?php

$title = $_POST['title'];
$gatunek = $_POST['gatunek'];
$year = $_POST['year'];
$mark = $_POST['mark'];
$conn = mysqli_connect('localhost','root','','dane');
$query = "INSERT INTO `filmy`( `gatunki_id`,`tytul`,`rok`, `ocena`) VALUES ('$gatunek','$title','$year','$mark');";
mysqli_query($conn,$query);
print_r("Film $title został dodany do bazy");
mysqli_close($conn);
?>