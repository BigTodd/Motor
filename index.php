<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTOR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="motor.png" type="image/x-icon">
    <script src="skk.js" defer></script>
</head>
<body>
    <div class="bod">
        <h1>DODAJ WYCIECZKE</h1>
        
        <form action = "wyk.php" method = "post">
            <label for="nazwa">Nazwa</label>
            <input type="text" id = "nazwa" name = "nazwa">
            <label for="">Opis</label>
            <textarea id = "opis" name = "opis" rows="4" cols="50"></textarea>
            <label for="pocz">Początek</label>
            <input type="text" id = "pocz" name = "pocz">
            <label for="kon">Koniec</label>
            <input type="text" id = "kon" name = "kon">
            <button>DODAJ</button>
        </form>
        <h1>USUŃ WYCIECZKE</h1>
        <form action='delete.php' method="post">
            <select name="listaa">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "motor");
                    $skl = "SELECT wycieczki.id, nazwa, zrodlo FROM wycieczki INNER JOIN zdjecia ON zdjecia.id = zdjecia_id;";
                    $res = mysqli_query($con, $skl);
                    while($wyn = mysqli_fetch_assoc($res)){
                        echo "<option value={$wyn['id']} data-imgs={$wyn['zrodlo']}>{$wyn['nazwa']}</option>";
                    }
                ?>
                
            </select>
            <button>USUN</button>
        </form>
    </div>
    <div class="zdjj">
            <h1>ZDJĘCIE WYCIECZKI</h1>
            <div class="zdj">
                    
            </div>
        </div>
</body>
</html>