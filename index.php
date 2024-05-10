<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Első beolvasás
        $fajl = readfile("kedvenc2.json");
        echo "$fajl<br>";
        // Második beolvasás
        $eroforras = fopen("kedvenc2.json","r") or die ("Unable to open file!");
        $fajl = fread($eroforras, filesize("kedvenc2.json"));
        fclose($eroforras);
        echo $fajl;
        // Átalakítás tömbé
        $tomb = json_decode($fajl);
        echo '<pre>' . var_export($tomb, true) . '</pre>';
        // Táblázat kiírás
    ?>
    <div>
        <tabale>
            <tr>
                <?php
                    foreach ($tomb[0] as $kulcs => $ertek) {
                        echo "<th>";
                        echo $kulcs;
                        echo "</th>";
                    }
                ?>
            </tr>
            <?php
                            
            ?>
        </tabale>
    </div>
</body>
</html>