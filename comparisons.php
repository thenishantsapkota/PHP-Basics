<?php
    # Booleans
    echo true; // 1
    echo false; // Empty string

    echo "nishant" > "madan"; // True
    echo "nishant" < "madan"; // False because "n" is greater than "m" as it comes early

    echo "nishant" > "Nishant"; // True because "n" is greater than "N"

    echo "nishant" == 'nishant'; // True
    echo "nishant" == "Nishant"; // False because "N" is smaller than "n"


    # Loose and Strict Comparisons
    # Strict comparison take in account the datatype of the variable we are comparing
    # loose comparison doesn't do that, it just evaluates the value.
    echo 5 == "5";
    echo 5 === "5"; 
    # Better to use strict comparisons

    echo true == "1"; // True in loose comparison
    echo false == "";  // True in loose comparison

?>