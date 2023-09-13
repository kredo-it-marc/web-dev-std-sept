<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading Activity</title>
</head>
<body>
    <?php
    /**
     * 90-100		--- Excellent
     * 85-89		--- Good
     * 80-84		--- Fair
     * 75-79		--- Poor
     * 60-74 		--- Fail
     * --- Invalid
     */
        if(isset($_POST["btn_submit"]))
        {
            //INPUT
            $grade = $_POST["grade"];

            //PROCESS & OUTPUT
            if(90<=$grade && $grade<=100)
            {
                echo "<p>Excellent</p>";
            }
            elseif(85<=$grade && $grade<=89)
            {
                echo "<p>Good</p>";
            }
            elseif(80<=$grade && $grade<=84)
            {
                echo "<p>Fair</p>";
            }
            elseif(75<=$grade && $grade<=79)
            {
                echo "<p>Poor</p>";
            }
            elseif(60<=$grade && $grade<=74)
            {
                echo "<p>Failed</p>";
            }
            else
            {
                echo "<p>INVALID</p>";
            }
        }
    ?>
    <form action="" method="post">
        <label for="grade">Grade</label>
        <input type="number" name="grade" id="grade" required>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>