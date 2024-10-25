<?php
$link = mysqli_connect("localhost", "root", "", "motor");
$id_do_usuniecia = $_POST["listaa"];
$skil = "DELETE FROM wycieczki WHERE id = $id_do_usuniecia";
$result = mysqli_query($link, $skil);
header("location: index.php");
?>