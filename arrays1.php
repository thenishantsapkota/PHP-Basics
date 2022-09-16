<?php
    
    #Indexed Arrays
    $peopleOne = ["Madan", "Joshan", "Milan"];
    // echo $peopleOne[0];

    $pepopleTwo = array("Pooja", "Garima", "Anusha");
    // echo $pepopleTwo[1];

    $ages = [20, 23, 26];
    // print_r($ages);
    $ages[1] = 25;
    // print_r($ages);

    $ages[] = 30;
    // print_r($ages);
    
    array_push($ages, "35");
    // print_r($ages);

    // echo count($ages);

    $peopleThree = array_merge($peopleOne, $pepopleTwo);
    // print_r($peopleThree);

    # Associative Arrays
    # (Key value pairs)

    $randomOne = ["nishant" => "sapkota", "joshan" => "poudel"];
    // echo $randomOne["nishant"];
    // print_r($randomOne);

    $randomTwo = array("milan" => "pokhrel", "madan" => "bhandari");
    // print_r($randomTwo);

    $randomTwo["garima"] = "dhakal";
    // print_r($randomTwo);
    // echo count($randomTwo);

    $randomThree = array_merge($randomOne, $randomTwo);
    // print_r($randomThree);


?>