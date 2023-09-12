<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Circumference of a Circle</title>
</head>
<body>
    <div class="container py-5">
        <?php
            //FORM HANDLING CODE
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $radius = $_POST["radius"];

                //PROCESS
                $circumference = calculateCircumference($radius);

                //OUTPUT
                echo displayOutput($radius, $circumference);
            }
        ?>
        <div class="w-25 mt-3 mx-auto">
            <form action="" method="post">
                <label for="radius" class="form-label">Radius</label>
                <input type="number" name="radius" id="radius" class="form-control mb-3" required>
                <input type="submit" value="Submit" name="btn_submit"  class="btn btn-primary w-100">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    function calculateCircumference($radius)
    {
        return (2 * pi() * $radius );
    }

    function displayOutput($radius, $circumference)
    {
        return "<div class='alert alert-success w-50 mx-auto text-center'>The circumference of a circle, given the radius of $radius, is $circumference units.</div>";
    }
?>
