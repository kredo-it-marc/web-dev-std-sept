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

<h1>Associative Array</h1>
<?php
    //declaring an associative array
    // Method 1 - using []
    $person = ["name"=>"Nikko","age"=>25, "address"=>"Tagum City"];

    //Method 2 - using array()
    $book = array("title"=>"Harry Potter", "author"=>"J.K. Rowling", "price"=>10.00);

    //assigning individual values to an associative array
    // $array_name[key/index] = value;
    $age["Mary"] = 16;
    $age["James"] = 25;
    $age["Tim"] = 30;

    //displaying individual values from the array
    echo $person["name"],"<br>"; //Nikko
    echo $person["age"],"<br>"; // 25
    echo $person["address"],"<br>"; //Tagum City

    //using foreach loop
    foreach($book as $key => $value)
    {
        echo "<p>The $key is $value</p>";
    }
?>

<h1>2D Array</h1>
<?php
    $market = [
        "round" => ["fruit1"=>"Orange","fruit2"=>"Grapes"],
        "yellow" => ["fruit3"=>"Banana","fruit4"=>"Mango"]
    ];

    //to access individual values from a 2D array
    //$array_name[sub_array][key/index];
    echo $market["round"]["fruit1"],"<br>"; //Orange
    echo $market["round"]["fruit2"],"<br>"; //GRapes
    echo $market["yellow"]["fruit3"],"<br>"; //Banana
    echo $market["yellow"]["fruit4"],"<br>"; //Mango

    foreach($market as $sub_array => $values)
    {
        echo "<h1>$sub_array</h1>";
        
        echo "<ul>";
        foreach($values as $key => $val)
        {
            echo "<li>$val</li>";
        }
        echo "</ul>";

    }
?>