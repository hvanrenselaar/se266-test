<?php

    function fizzBuzz($num)
    {
        if ($num % 2 == 0) {
            return ("Fizz");
        }
        return ($num);
    }

    for ($i=1; $i<=100; $i++) {
        echo fizzBuzz($i) . "<br />";
    }
    
?>

