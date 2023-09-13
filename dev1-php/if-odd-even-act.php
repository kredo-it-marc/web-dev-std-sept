<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Odd Even Activity</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $number = $_POST["input"];

                //PROCESS & OUTPUT
                if( $number%2 != 0) //check if the number is ODD
                {
                    //if the condition is true, the input is ODD
                    echo "<p class='text-center text-danger fw-bold'>$number is ODD</p>";
                }
                else
                {
                    //if the condition is false, the input is EVEN
                    echo "<p class='text-center text-primary fw-bold'>$number is EVEN</p>";
                }
            }
        
        ?>
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="input" class="form-label">Enter a number</label>
                <input type="number" name="input" id="input" class="form-control mb-3" required>
                <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
            </form>
        </div>
    </div>
</body>
</html>