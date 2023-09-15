<?php

    for($counter=1; $counter<=10; $counter++)
    {
        if($counter%2 == 0 && $counter != 10)
        {
            echo $counter.".";
        }
        elseif($counter == 10)
        {
            echo $counter;
        }
        else
        {
            echo $counter."-";
        }
    }

?>