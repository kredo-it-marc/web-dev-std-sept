<h1>Indexed Array</h1>
<?php
    //declare an array
    // method 1 - using square brackets []
    $fruits = ["Apple", "Banana", "Orange"];

    //method 2 - using the array() language construct
    $trees = array("Mango", "Narra", "Mahogany","Fire Tree"); 

    //assigning value to individual index
    $color[0] = "Blue";
    $color[1] = "Red";
    $color[2] = "Yellow";
    $color[3] = "Green";

    //displaying individual values
    echo $fruits[0]."<br>"; //Apple
    echo $fruits[1]."<br>"; //Banana
    echo $fruits[2]."<br>"; //Orange

    echo $trees[0]."<br>"; //Mango
    echo $trees[1]."<br>"; // Narra
    echo $trees[2]."<br>"; //Mahogany
    echo $trees[3]."<br>"; //Fire Tree

    echo $color[0]."<br>"; //Blue
    echo $color[1]."<br>"; //Red
    echo $color[2]."<br>"; //Yellow

    //display contents of an array using print_r()
    print_r($fruits);
    echo "<br>";
    print_r($trees);
    echo "<br>";
    print_r($color);

    //using loop on an array
    foreach($fruits as $value)
    {
        echo "<p>$value</p>";
    }

    foreach($trees as $value)
    {
        echo "<p>$value</p>";
    }

    foreach($color as $value)
    {
        echo "<p>$value</p>";
    }


    //displaying array using for loop
    $fruits_length = count($fruits); //count() counts how many elements/values there are in the array
    for($key=0; $key<$fruits_length; $key++)
    {
        echo "<h1>".$fruits[$key]."</h1>";
    }
?>