<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kredo Cafe</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <h1 class="display-5 text-center">How many people are going to eat at the cafe?</h1>
                <form action="" method="post">
                    <input type="number" name="no_of_people" id="no-of-people" class="form-control mb-3" required min="1">
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary w-100">
                </form>
            </div>
        </div>


        <div class="w-25 mx-auto mt-5">
            <form action="" method="post">
                <?php
                    if( isset($_POST["btn_submit"]) )
                    {
                        //INPUT
                        $no_of_people = $_POST["no_of_people"];

                        echo "<p class='text-center h5'>Enter the age for each customer:</p>";
                        //PROCESS & OUTPUT
                        for($i=1; $i<=$no_of_people; $i++)
                        {
                            echo "<label class='form-label' for='customer-$i'>Customer $i</label>";
                            echo "<input type='number' class='form-control mb-3' name='age[]' id='customer-$i' required min='0'>";
                        }

                        echo "<input type='submit' name='btn_save' value='Save' class='btn btn-success w-100'>";
                    }
                ?>
            </form>
        </div>

        <?php
            if( isset($_POST["btn_save"]) )
            {
                //INPUT
                $ages = $_POST["age"];
                $ages_count = count($ages); //count() retruns how many values/elements there are in the array

                //PROCESS
                $prices = calculatePrice($ages);
                $total_price = calculateTotalPrice($prices);

                //OUTPUT
                echo "<table class='table table-bordered table-striped w-50 mx-auto'><thead class='table-dark'><tr><th>Age</th><th>Price</th></tr></thead><tbody>";
        
                for($i=0; $i<$ages_count; $i++)
                {
                    echo "<tr><td>".$ages[$i]."</td><td>".$prices[$i]."</td></tr>";
                }
            
                echo "<tr class='table-danger'><td>Total Price</td><td>$total_price</td></tr>";
                echo "<tr class='table-primary'><td>Total No. of Customers</td><td>$ages_count</td></tr>";
                echo "</tbody></table>";
            }
        ?>
    </div>
</body>
</html>
<?php
    function calculatePrice($ages)
    {
        $regular_rate = 325;
        $prices = []; //declare a blank array. This will contain the prices later on

        foreach($ages as $age)
        {
            if(0<=$age && $age<=5) //check if age is between 0-5
            {
                array_push($prices,0); //add/insert a value into the array
            }
            elseif(6<=$age && $age<=10)//check if age is between 6-10
            {
                $discounted_price = $regular_rate * .90; //apply 10% discount
                array_push($prices, $discounted_price);
            }
            elseif(60<=$age) //check if age is 60 or greater
            {
                $discounted_price = $regular_rate * .95; //apply 5% discount
                array_push($prices, $discounted_price);
            }
            else
            {
                array_push($prices,$regular_rate);
            }
        }

        return $prices;
    }

    function calculateTotalPrice($prices)
    {
        $total = 0;

        foreach($prices as $x)
        {
            $total += $x; //$total = $total + $x;
        }

        return $total;
    }
?>