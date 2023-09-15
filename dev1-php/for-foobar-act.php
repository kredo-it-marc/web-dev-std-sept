<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>FooBar Activity</title>
</head>
<body>
    <div class="container py-5">
        <div class="text-center" style="overflow:scroll;">
            <?php
                if( isset($_POST["btn_submit"]) )
                {
                    //INPUT
                    $start = $_POST["start"];
                    $end = $_POST["end"];

                    //PROCESS
                    if($start < $end) //ascending
                    {
                        for($counter=$start; $counter<=$end; $counter++)
                        {
                            if( $counter%3==0 && $counter%5==0 ) //check if current value is divisible by 3 AND 5
                            {
                                echo "<span class='me-3 fst-italic text-muted'>FOOBAR</span>";
                            }
                            elseif($counter%3==0) //check if the current value is divisible by 3
                            {
                                echo "<span class='me-3 fst-italic text-muted'>FOO</span>";
                            }
                            elseif($counter%5==0) //check if the current value is divisible by 5
                            {
                                echo "<span class='me-3 fst-italic text-muted'>BAR</span>";
                            }
                            else
                            {
                                //display current value
                                echo "<span class='me-3 text-info'>$counter</span>";
                            }
                        }
                    }
                    elseif( $start>$end ) //descending
                    {
                        for($counter=$start; $counter>=$end; $counter--)
                        {
                            if( $counter%3==0 && $counter%5==0 ) //check if current value is divisible by 3 AND 5
                            {
                                echo "<span class='me-3 fst-italic text-muted'>FOOBAR</span>";
                            }
                            elseif($counter%3==0) //check if the current value is divisible by 3
                            {
                                echo "<span class='me-3 fst-italic text-muted'>FOO</span>";
                            }
                            elseif($counter%5==0) //check if the current value is divisible by 5
                            {
                                echo "<span class='me-3 fst-italic text-muted'>BAR</span>";
                            }
                            else
                            {
                                //display current value
                                echo "<span class='me-3 text-info'>$counter</span>";
                            }
                        }
                    }
                    else
                    {
                        if( $start%3==0 && $start%5==0 ) //check if current value is divisible by 3 AND 5
                        {
                            echo "<span class='me-3 fst-italic text-muted'>FOOBAR</span>";
                        }
                        elseif($start%3==0) //check if the current value is divisible by 3
                        {
                            echo "<span class='me-3 fst-italic text-muted'>FOO</span>";
                        }
                        elseif($start%5==0) //check if the current value is divisible by 5
                        {
                            echo "<span class='me-3 fst-italic text-muted'>BAR</span>";
                        }
                        else
                        {
                            //display current value
                            echo "<span class='me-3 text-info'>$start</span>";
                        }
                    }
                }
            ?>
        </div>
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="start" class="form-label">Start</label>
                <input type="number" name="start" id="start" class="form-control mb-3" required>
                <label for="end" class="form-label">End</label>
                <input type="number" name="end" id="end" class="form-control mb-3" required>
                <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
            </form>
        </div>
    </div>
</body>
</html>