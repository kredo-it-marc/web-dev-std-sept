<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>If Greater</title>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <?php
                if( isset($_POST["btn_submit"]) )
                {
                    //INPUT
                    $num1 = $_POST["num_1"];
                    $num2 = $_POST["num_2"];

                    //PROCESS & OUPUT
                    if( $num1 > $num2 )
                    {
                        echo "<div class='col-3 p-3 text-center bg-warning'><h1 class='text-white'>$num1</h1></div>";
                        echo "<div class='col-3 p-3 text-center bg-primary'><h1 class='text-white'>$num2</h1></div>";
                    }
                    elseif( $num1 == $num2)
                    {
                        echo "<div class='col-3 p-3 text-center bg-warning'><h1 class='text-white'>$num1</h1></div>";
                    }
                    else
                    {
                        echo "<div class='col-3 p-3 text-center bg-warning'><h1 class='text-white'>$num2</h1></div>";
                        echo "<div class='col-3 p-3 text-center bg-primary'><h1 class='text-white'>$num1</h1></div>";
                    }
                }
            ?>
        </div>
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="num-1" class="form-label">Number 1</label>
                <input type="number" name="num_1" id="num-1" class="form-control mb-3" required>
                <label for="num-2" class="form-label">Number 2</label>
                <input type="number" name="num_2" id="num-2" class="form-control mb-3" required>
                <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
            </form>
        </div>
    </div>
</body>
</html>