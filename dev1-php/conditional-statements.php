<?php
    $num = 5;
    
    //$num < 10 is the condition. a condition should evaluate to either TRUE or FALSE
    if($num < 10 )
    {
       //if-block - the code here only runs if the condition is TRUE 
        echo "<p>$num is less than 10</p>";
    }

    //Activity 1
    $num1 = 3000;
    $num2 = 3000;
    $num3 = 400;

    if($num1>=$num2 && $num1>=$num3) //check if $num1 contains the largest value
    {
        echo "<p>$num1 is the largest value.</p>";
    }

    if($num2 >= $num1 && $num2>=$num3) //check if $num2 contains the largest value
    {
        echo "<p>$num2 is the largest value.</p>";
    }

    if($num3>=$num1 && $num3>=$num2)//check if $num3 contains the largest value
    {
        echo "<p>$num3 is the largest value.</p>";
    }

    //if-else
    $x = -10;

    if($x >=0 )
    {
        if($x >= 25)
        {
            // if-block => the code here runs if the condition evaluates to TRUE
            echo "<p>$x is greater than or equal to 25</p>";
        }
        else
        {
            //else-block => the code here runs if the condition is FALSE
            echo "<p>$x is less than 25</p>";
        }
    }

    /**
     * LEAP YEAR ACTIVITY
     * 
     * The year is a leap year if:
     * 1. year is divisible by 4 and NOT divisible by 100
     * OR
     * 2. year is divisible by 4, by 100, and by 400
     */
?>