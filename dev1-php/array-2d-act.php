<?php
    $jap_regions = [
        "Hokkaido" => ["Hokkaido" => "Sapporo"],
        "Chubu" => ["Ishikawa" => "Kanazawa", "Shizuoka" => "Fuji", "Toyama" => "Toyama", "Aichi" => "Nagoya"],
        "Chugoku" => ["Yamaguchi" => "Shimonoseki", "Tottori" => "Tottori"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese Region</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }

        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        foreach( $jap_regions as $region => $prefecture_city)
        {
            echo "<h1>$region</h1>";
            
            echo "<table>";
            echo "<tr><th>Prefecture</th><th>City</th></tr>";
            
            foreach($prefecture_city as $prefecture => $city)
            {
                echo "<tr><td>$prefecture</td><td>$city</td></tr>";
            }

            echo "</table>";
        }
    ?>
</body>
</html>