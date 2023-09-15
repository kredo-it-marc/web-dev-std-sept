<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Row Col Activity</title>
    <style>
        table,td{
            border: 1px solid black;
        }

        table{
            width: 50%;
            margin-left:auto;
            margin-right:auto;
            border-collapse: collapse;
        }

        tr{
            height:20px;
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="row">Rows</label>
        <input type="number" name="row" id="row" required>
        <br><br>
        <label for="col">Columns</label>
        <input type="number" name="col" id="col" required>
        <br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
    <?php
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $row = $_POST["row"];
            $col = $_POST["col"];

            //PROCESS & OUTPUT
            echo "<h1>$row x $col Table</h1>";

            echo "<table>";
                for($i=1; $i<=$row; $i++) //display rows
                {
                    echo "<tr>";
                    for($j=1; $j<=$col; $j++)//display columns
                    {
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";
        }
    ?>

</body>
</html>