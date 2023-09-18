<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Quiz Calculator</title>
</head>
<body>
    <div class="container py-5">
        <div class="w-25 mx-auto">
            <!-- FORM 1 -->
            <form action="" method="post">
                <label for="no-of-quizzes" class="form-label">How many quizzes do you have?</label>
                <input type="number" name="no_of_quizzes" id="no-of-quizzes" class="form-control mb-3" required min="1">
                <input type="submit" value="Set" class="btn btn-primary w-100" name="btn_set">
            </form>

            <!-- FORM 2 -->
            <form action="" method="post">
                <?php
                    if(isset($_POST["btn_set"]))
                    {
                        //INPUT
                        $no_of_quizzes = $_POST["no_of_quizzes"];

                        //PROCESS & OUPUT
                        echo "<hr>";

                        for($i=1; $i<=$no_of_quizzes; $i++)
                        {
                            echo "<label for='score-$i' class='form-label'>Score $i</label>";
                            echo "<input type='number' name='score[]' id='score-$i' required class='form-control mb-3' min='0'>";
                        }

                        echo "<input type='submit' value='Save' name='btn_save' class='btn btn-success w-100'>";
                    }
                ?>
            </form>
            <?php
                if( isset($_POST["btn_save"]))
                {
                    //INPUT
                    $scores = $_POST["score"];
                    $score_count = count($scores); //counts how many values there are in the array

                    //PROCESS & OUTPUT
                    $total_scores = 0;
        
                    foreach($scores as $x) //calculate the sum of the scores
                    {
                        $total_scores += $x; //$total_scores = $total_scores + $x;
                    }

                    //calculate the average
                    $average = $total_scores / $score_count;

                    //OUTPUT
                    echo "<div class='alert alert-success text-center mt-5'>The average score is $average</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>