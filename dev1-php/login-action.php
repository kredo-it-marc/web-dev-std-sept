<?php

/**
 * the condition will evaluate to either TRUE or FALSE
 * 
 * if( condition )
 * {
 *  if-block
 *  the code inside this curly braces will only run if the condition evaluates to TRUE
 * }
 * 
 */

    //GET METHOD
    //if-statement
    if( isset($_GET["btn_login"]) ) //isset() returns TRUE if the variable has a value, otherwise FALSE
    {
        //if-block -> the code here runs if the condition evaluates to TRUE
        // INPUT
        $username = $_GET["username"];
        $password = $_GET["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }

    //POST METHOD
    if( isset($_POST["btn_login"]) )
    {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }
?>