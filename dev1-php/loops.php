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