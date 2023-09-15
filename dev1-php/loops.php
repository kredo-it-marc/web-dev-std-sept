<h1>While Loop</h1>
<?php
    $num = 1;

    while( $num < 5 )
    {
        //while-block => the code here only runs if the condition evaluates to TRUE.
        //if the condition evaluates to FALSE, the loop stops
        //loop body
        echo "<p>$num is less than 5</p>";
        $num++;
    } 
?>

<h1>Do-While Loop</h1>
<?php
    $num = 1;

    do{
        //do-block => the code here runs first
        //also known as loop body
        echo "<p>$num is less than 5</p>";
        $num++;
    }while( $num<5 );

?>

<h1>For Loop</h1>
<?php

    for($num=1; $num<5; $num++)
    {
        //for-block / loop body
        echo "<p>$num is less than 5</p>";
    }
?>

<h1>Nested Loops</h1>
<?php
    for($i=1; $i<=5; $i++) //display the rows
    {
        for($j=0; $j<=5; $j++) //display the columns. In this case, the stars
        {
            echo "*";
        }
        echo "<br>";
    }
?>

<h1>Activity 10 - For Stars Activity</h1>
<?php
    for($i=1; $i<=7; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
            echo "*";
        }
        echo "<br>";
    }
?>

<h1>Activity 12 - Num Triangle</h1>
<?php
    for($i=1; $i<=5; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
            echo $j;
        }
        echo "<br>";
    }
?>