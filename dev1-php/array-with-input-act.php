<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Activity</title>
</head>
<body>
    <form action="" method="post">
        <label for="no_of_countries">How many countries have you been to?</label>
        <input type="number" name="no_of_countries" min="1" id="no_of_countries" required>
        <input type="submit" value="Set" name="btn_set">
    </form>

    <form action="" method="post">
        <?php
            if(isset($_POST["btn_set"]))
            {
                //INPUT
                $no_of_countries = $_POST["no_of_countries"];

                //PROCESS & OUTPUT
                echo "<hr>";

                for($i=1; $i<=$no_of_countries; $i++) //use for loop to display the input fields
                {
                    echo "<label for='country-$i'>Country $i</label>";
                    echo "<input type='text' name='country[]' id='country-$i' required><br><br>";
                }

                echo "<input type='submit' name='btn_save' value='Save'>";
            }
        ?>
    </form>

    <?php
        if( isset($_POST["btn_save"]) )
        {
            //INPUT
            $countries = $_POST["country"];

            //PROCESS & OUTPUT
            foreach($countries as $country)
            {
                echo "<h1>$country</h1>";
            }
        }
    ?>
</body>
</html>