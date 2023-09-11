<?php
    //no arguments, no return
    function helloWorld() 
    {
        echo "<p>Hello World</p>";
    }

    //1 argument, no return
    function greetUser($name)
    {
        echo "<p>Hello, $name!</p>";
    }

    //2 arguments, no retrun
    function add($x, $y)
    {
        $sum = $x + $y;
        echo "<p>The sum of $x and $y is $sum</p>";
    }

    //2 arguments, 1 return
    function multiply($x, $y)
    {
        $product = $x * $y;
        return $product;
    }

    //function call
    helloWorld();
    helloWorld();
    helloWorld();
    helloWorld();
    
    greetUser("Sam");
    greetUser("Tim");
    greetUser("Mary");

    add(15,20);
    add(8,11);
    add(107.2,33.01);

    $prod1 = multiply(51, 77);
    echo "<p>$prod1</p>";

    $prod2 = multiply(10.004, 88.2);
    echo "<p>$prod2</p>";

    $prod3 =multiply(0.003, 0.009);
    echo "<p>$prod3</p>";


?>