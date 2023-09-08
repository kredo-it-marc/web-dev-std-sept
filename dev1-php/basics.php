<?php
    echo "Hello";
    echo "<h1>Headline 1</h1>";
    echo "Tim","John"; //display two texts with one echo
    echo "first"."second"."third";

    print "Hello";
    print "<h1>Headline 1</h1>";
   // print "Tim","John"; //print cannot display 2 or more words

    //Variables => store data
    echo "<hr>";
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;
    
    echo "<p>My name is $first_name $last_name. I am $age years old.</p>";

    // Data type
    $str = "I am a string.";
    $int = 200;
    $float_or_double = 700.003;
    $bool = FALSE;

    //var_dump() => is a function. It displays the value and the data type.
    var_dump($str);
    echo "<br>";
    var_dump($int);
    echo "<br>";
    var_dump($float_or_double);
    echo "<br>";
    var_dump($bool);
    echo "<br>";
?>