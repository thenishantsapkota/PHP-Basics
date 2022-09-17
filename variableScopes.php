<?php
    # Scope of Variables in PHP

    // Local Scope
    function myFunc(){
        $price = 10; // Local scope variable
        echo $price;
    }

    // echo $price; // Outside the local scope
    // myFunc();

    function myFunc2($age){
        echo $age; // Local scope variable
    }

    // myFunc2(25);
    // echo $age; // Outside the local scope

    # Global Scope
    $name = "Nishant"; // Global variable

    function printName(){
        global $name; // Defining that the variable is in the global scope
        $name = "Madan"; // Can be overridden inside the function and the value will change
        echo "Hello $name";
    }

    // printName();
    // echo $name; // Only works if the function is invoked

    function sayGoodBye($name){ // $name is a local variable as it's an argument of the function
        $name = "Madan"; // Cannot be overridden as it's a local variable
        // and has no connection with the global variable;
        echo "Bye Bye $name";
    }

    // sayGoodBye($name);
    // echo $name;

    function sayGoodBye1(&$name){ // passing $name variable as a reference of the global variable
        $name = "Madan"; // Can  be overridden because the reference of the variable is passed in
        echo "Bye Bye $name";
    }
    sayGoodBye1($name);
    echo $name;
    
?>