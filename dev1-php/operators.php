<h1>Arithmetic Operators</h1>
<?php
    $num1 = 11;
    $num2 = 77.02;
    $num3 = 32.3;
    $num4 = 100;

    $sum = $num1 + $num2; //addition
    $difference = $num2 - $num3; //subtraction
    $product = $num2 * $num3; //multiplication
    $quotient = $num4 / $num1; //division
    $remainder = $num4 % $num1; //remainder %==> modulo operator-> returns the remainder

    echo "<p>The sum of $num1 and $num2 is $sum</p>";
    echo "<p>The difference of $num2 and $num3 is $difference</p>";
    echo "<p>The product of $num2 and $num3 is $product</p>";
    echo "<p>The quotient of $num4 divided by $num1 is $quotient</p>";
    echo "<p>The remainder of $num4 divided by $num1 is $remainder</p>";
?>
<hr>
<h1>Assignment Operator</h1>
<?php
    $a = 11;
    $b = 98.01;
    $c = 32.09;
    $d = 65;
    $e = 33;
    $f = 18;
    $g = 2;
    $h = 4;
    $i = 77.06;
    $j = 20.1;

    echo "<strong>Initial Value</strong>";
    echo "<p>a = $a</p>";
    echo "<p>b = $b</p>";
    echo "<p>c = $c</p>";
    echo "<p>d = $d</p>";
    echo "<p>e = $e</p>";
    echo "<p>f = $f</p>";
    echo "<p>g = $g</p>";
    echo "<p>h = $h</p>";
    echo "<p>i = $i</p>";
    echo "<p>j = $j</p>";

    $a += $j; //Addition assignment operator => equivalent expression=> $a = $a + $j;
    $b -= $i; //Subtraction assignment operator => equivalent expression=> $b = $b - $i;
    $c *= $h; //Multiplication Assignment Operator => equivalent expression=> $c = $c * $h;
    $d /= $g; //Division Assignment Operator => equivalent expression=> $d = $d / $g;
    $e %= $f; //Modulo Assignment Operator => equivalent expression=> $e = $e % $f;

    echo "<strong>Final Value</strong>";
    echo "<p>a = $a</p>";
    echo "<p>b = $b</p>";
    echo "<p>c = $c</p>";
    echo "<p>d = $d</p>";
    echo "<p>e = $e</p>";
    echo "<p>f = $f</p>";
    echo "<p>g = $g</p>";
    echo "<p>h = $h</p>";
    echo "<p>i = $i</p>";
    echo "<p>j = $j</p>";
?>
<hr>
<h1>Increment (++)</h1>
<?php
    $x = 201;
    echo "<p>Initial Value : $x</p>"; //201
    echo "<p>Preincrement : ".++$x."</p>"; //202 Add 1 first then display the value
    echo "<p>Postincrement : ".$x++."</p>"; //202 display the value first then add 1 to the value
    echo "<p>Final Value : $x</p>"; //203

?>
<hr>
<h1>Decrement (--)</h1>
<?php
    $y = 22;
    echo "<p>Initial Value: $y</p>"; //22
    echo "<p>Predecrement: ".--$y."</p>";//21 subtract 1 first, then display the value
    echo "<p>Postdecrement: ".$y--."</p>";//21 display the current value first then subtract 1
    echo "<p>Final Value: $y</p>";//20
?>
<hr>
<h1>Comparison Operators</h1>
<?php
    $num1 = 33.4; 
    $num2 = 7;
    $num3 = 86.5;
    $num4 = 43;

    $equal_to = ($num1 == 33.4); //TRUE
    $identical = ($num2 === 7.0 ); //FALSE
    $not_equal = ($num1 != $num2); //TRUE
    $not_equal2 = ($num2 <> $num3); //TRUE
    $greater_than = ($num3 > $num4); //TRUE
    $greater_than_or_equal_to = ($num1 >= $num4); //FALSE
    $less_than = ($num2 < $num3 ); //TRUE
    $less_than_or_equal_to = ($num4 <= $num1); //FALSE

    echo "<p>$num1 == 33.4 is $equal_to</p>";
    echo "<p>$num2 === 7.0 is $identical</p>";
    echo "<p>$num1 != $num2 is $not_equal</p>";
    echo "<p>$num2 <> $num3 is $not_equal2</p>";
    echo "<p>$num3 > $num4 is $greater_than</p>";
    echo "<p>$num1 >= $num4 is $greater_than_or_equal_to</p>";
    echo "<p>$num2 < $num3 is $less_than</p>";
    echo "<p>$num4 <= $num1 is $less_than_or_equal_to</p>";
?>
<hr>
<h1>Logical Operators</h1>
<?php
    $and = TRUE && TRUE; //TRUE
    $or = TRUE || FALSE; //TRUE
    $not = !FALSE; //TRUE

    echo "<p>TRUE && TRUE is $and</p>";
    echo "<p>TRUE || FALSE is $or</p>";
    echo "<p>!FALSE is $not</p>";
?>