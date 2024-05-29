<?php 
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$adres = $_POST['adres']; 

$conn = mysqli_connect('localhost', 'root', '','wedkowanie');
$query = "INSERT INTO `karty_wedkarskie`(`imie`, `nazwisko`, `adres`) VALUES ('$imie','$nazwisko','$adres')";
mysqli_query($conn, $query);
mysqli_close($conn);
?>
