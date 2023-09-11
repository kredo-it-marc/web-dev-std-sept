<?php
    //Convert Celsius to F
    $temp1 = 37;
    $temp2 = 0;
    $temp3 = 50;
    $temp4 = 100;
    $temp5 = 102;
    
    // (°C × 9/5) + 32
    $fahrenheit1 = ($temp1 * (9/5)) + 32;
    $fahrenheit2 = ($temp2 * (9/5)) + 32;
    $fahrenheit3 = ($temp3 * (9/5)) + 32;
    $fahrenheit4 = ($temp4 * (9/5)) + 32;
    $fahrenheit5 = ($temp5 * (9/5)) + 32;

    // OUTPUT
    echo "<p>$temp1 °C is equal to $fahrenheit1 °F</p>";
    echo "<p>$temp2 °C is equal to $fahrenheit2 °F</p>";
    echo "<p>$temp3 °C is equal to $fahrenheit3 °F</p>";
    echo "<p>$temp4 °C is equal to $fahrenheit4 °F</p>";
    echo "<p>$temp5 °C is equal to $fahrenheit5 °F</p>";

?>