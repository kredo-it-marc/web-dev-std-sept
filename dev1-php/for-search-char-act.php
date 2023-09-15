<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Search Char</title>
</head>
<body>
    <div class="container oy-5">
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //input
                $input = $_POST["word"];
                $input_lower = strtolower($input); //convert input to lowercase
                $input_count = strlen($input); //count how many characters there are in the string

                $count = 0; //initial count for vowels
                
                //PROCESS
                for($counter=0; $counter<$input_count; $counter++)
                {
                    $char = substr($input_lower,$counter,1); //take 1 character from the string

                    if($char == 'a' || $char=='e' || $char == 'i' || $char=='o' || $char=='u') //check if the character from the string is a vowel
                    {
                        //update the value of the vowel count
                        $count++;
                    }
                }

                //OUPUT
                echo "<div class='alert alert-success w-50 mx-auto text-center'>$input has $count vowels.</div>";
            }
        ?>
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="word" class="form-label">Word</label>
                <input type="text" class="form-control mb-3" id="word" name="word" required>
                <input type="submit" value="Submit" class="btn btn-primary w-100" name="btn_submit">
            </form>
        </div>
    </div>
</body>
</html>