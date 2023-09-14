<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Consonant or Vowel</title>
</head>
<body>
    <div class="container py-5">
        <?php
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $input = $_POST["input"];
                $input_lower = strtolower($input); //convert the input to lowercase
                $input_count = strlen($input); //count how many characters there are in the input

                //PROCESS & OUTPUT
                if($input_lower=='a' || $input_lower=='e' || $input_lower=='i' || $input_lower=='o' || $input_lower=='u') //check if the input is a vowel
                {
                    echo "<div class='alert alert-success w-25 mx-auto mb-4 text-center'>$input is a VOWEL</div>";
                }
                elseif($input_count > 1 || !ctype_alpha($input)) //check if the input is invalid
                {
                    echo "<div class='alert alert-danger w-25 mx-auto mb-4 text-center'>$input is INVALID</div>";
                }
                else
                {
                    echo "<div class='alert alert-primary w-25 mx-auto mb-4 text-center'>$input is a CONSONANT</div>";
                }
            }
        ?>
        <div class="w-25 mx-auto">
            <form action="" method="post">
                <label for="input" class="form-label">Enter a character</label>
                <input type="text" name="input" id="input" class="form-control mb-3" required>
                <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
            </form>
        </div>
    </div>
</body>
</html>