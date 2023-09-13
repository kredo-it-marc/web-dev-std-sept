<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Leap Year Activity</title>
</head>
<body>
    <div class="container py-5">
        <!--    
            /**
            * LEAP YEAR ACTIVITY
            * 
            * The year is a leap year if:
            * 1. year is divisible by 4 and NOT divisible by 100
            *  
            * OR
            * 2. year is divisible by 4, by 100, and by 400
            */
      -->
        <?php
            if( isset($_POST["btn_submit"]) )
            {
                //INPUT
                $year = $_POST["year"];

                //PROCESS AND OUTPUT
                if( ($year%4 == 0 && $year%100 != 0) || ($year%4==0 && $year%100==0 && $year%400==0))
                {
                    echo "<div class='alert alert-primary text-center w-50 mx-auto'>$year is a LEAP YEAR</div>";
                }
                else
                {
                    echo "<div class='alert alert-danger text-center w-50 mx-auto'>$year is NOT a LEAP YEAR</div>";
                }
            }
        ?>
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" id="year" class="form-control mb-3" required>
                <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
            </form>
        </div>
    </div>
</body>
</html>