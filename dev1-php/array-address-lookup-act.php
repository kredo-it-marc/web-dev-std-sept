<?php
    $contacts = ["John"=>"USA", "Sakura"=>"Japan", "Lee"=>"Singapore", "Li"=>"China"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Pages</title>
</head>
<body>
    <form action="" method="post">
        <label for="contact">Select a contact</label>
        <select name="contact" id="contact">
            <option disabled selected>Select a contact</option>
            <?php
            foreach($contacts as $key => $value)
            {
                echo "<option value='$key'>$key</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
    <?php
        if(isset($_POST["btn_submit"]))
        {
            //INPUT
            $contact_name = $_POST["contact"];

            //PROCESS & OUTPUT
            echo "<p> $contact_name lives in ".$contacts[$contact_name]."</p>";
        }
    ?>

</body>
</html>