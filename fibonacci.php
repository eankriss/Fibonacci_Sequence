<?php

    $num = 0;
    $num1 = 0;
    $num2 = 1;

    echo "Fibonacci Sequence less than 200: " . $num1 . ", " . $num2 . ", ";


    while($num < 11)
    {
        $num3 = $num1 + $num2;

        echo $num3 . ", ";

        $num1 = $num2;
        $num2 = $num3;
        $num = $num + 1;
    }

?>
