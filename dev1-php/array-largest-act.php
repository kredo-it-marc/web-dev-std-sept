<?php
    $num = [12, 19.02, 37, 89, .005, 100, 11.01, 89.9];

    $largest = NULL; //NULL means empty or no value

    foreach( $num as $x)
    {
        if($x>$largest) //check if the current value is larger than the value from $largest
        {
            //if the condition is TRUE, we need to change the value of the $largest with the current value from the array
            $largest = $x;
        }
    }

    //display output
    echo "<p>The largest value is $largest</p>";
?>