<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Area of a Rectangle</title>
</head>
<body>
    <div class="container py-5">
        <?php
            // FORM HANDLING CODE
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $length = $_POST["length"];
                $width = $_POST["width"];

                //PROCESS
                $area = calculateArea($length, $width);

                //OUTPUT
                echo displayOutput($length, $width, $area);
            }
        ?>
        <div class="w-25 mt-3 mx-auto">
            <form action="" method="post">
                <label for="length" class="form-label">Length</label>
                <input type="number" name="length" id="length" class="form-control mb-3" required>
                <label for="width" class="form-label">Width</label>
                <input type="number" name="width" id="width" class="form-control mb-3" required>
                <input type="submit" value="Submit" name="btn_submit"  class="btn btn-primary w-100">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    function calculateArea($length, $width)
    {
        return ($length * $width);
    }

    function displayOutput($length, $width, $area)
    {
        return "<div class='w-50 mx-auto alert alert-success text-center'>The area of the rectangle, given the length of $length and the width of $width, is $area sq. units. </div>";
    }
?>