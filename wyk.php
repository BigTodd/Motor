<?php

$link = mysqli_connect("localhost", "root", "", "motor");

$jeden = $_POST['nazwa'];
$dwa = $_POST['opis'];
$trzy = $_POST['pocz'];
$cztery = $_POST['kon'];

$tur = "INSERT INTO `wycieczki`(`nazwa`, `zdjecia_id`, `opis`, `poczatek`, `koniec`) VALUES ('$jeden', 1, '$dwa', '$trzy', '$cztery')";

mysqli_query($link, $tur);
header("location: index.php");