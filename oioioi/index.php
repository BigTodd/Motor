<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="oki.css">
</head>
<body>
    <?php
        header("Refresh:10");
    ?>
    <ol>
        <?php
            $con = mysqli_connect("localhost", "root", "", "okijez");
            $skl = "SELECT ulica FROM lokalizacje";
            $res = mysqli_query($con, $skl);
            while($wyn = mysqli_fetch_assoc($res)){
                echo "<li>Ulica {$wyn['ulica']}</li>";
            }
        ?>
    </ol>
    <table>
        <tr>
            <th></th>
        </tr>
        <?php
            $con = mysqli_connect("localhost", "root", "", "okijez");
            $skl = "SELECT rejestracja, ulica, waga, dzien, czas FROM wagi INNER JOIN lokalizacje ON lokalizacje.id = wagi.lokalizacje_id";
            $res = mysqli_query($con, $skl);
            while($wyn = mysqli_fetch_assoc($res)){
                echo "<tr><td>{$wyn['rejestracja']}</td><td>{$wyn['ulica']}</td><td>{$wyn['waga']}</td><td>{$wyn['dzien']}</td><td>{$wyn['czas']}</td></tr>";
            }
        ?>
    </table>
</body>
</html>