<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- action attribute is WHERE your data will be taken when the form is submitted -->
    <!-- if action attribute is empty, the data will be sent to this very same file -->
    <!-- method attribute is HOW your data will be taken TO the action -->

    <!-- FORM HANDLING CODE -> you can place this anywhere on the page -->
    <?php
        if( isset($_POST["btn_login"]) ) //check if the submit button is clicked
        {
            //INPUT
            $username = $_POST["username"];
            $password = $_POST["password"];

            //OUTPUT
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
        }
    ?>
    <form action="" method="POST">
        <!-- in this case, if the user submits the form, the data will be taken to login-action.php -->
        <!-- method GET sends the data through the URL as URL variables -->
        <!-- method POST sends the data invisibly to the action -->
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Login" name="btn_login">
    </form>
</body>
</html>