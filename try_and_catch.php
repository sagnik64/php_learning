<?php

function division($numerator, $denominator) {
    try {
        if($denominator == 0) {
            throw new Exception("<br>cannot divide by zero");
        }
        else {
            echo "<br>" . $numerator/$denominator;
        }
    }
    
    catch(Exception $e) {
        echo $e->getMessage();
    }
}

division(5,2);
division(5,1);
division(5,0); //this will throw exception as denominator is 0.
division(5,-1);
?>