<?php
$cate = $_POST['kategoria'];
$ucat = $_POST['podkategoria'];
$title = $_POST['title'];
$content = $_POST['content'];



$conn = mysqli_connect('localhost', 'root','', 'ogloszenia');
$query = "INSERT INTO `ogloszenie`( `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (1,'$cate','$ucat','$title','$content')";
mysqli_query($conn,$query);

mysqli_close($conn) ;
