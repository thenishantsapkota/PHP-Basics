<?php
    // Functions
    function sayHello($name){
        echo "Hello there, $name"."<br />";
    }
    sayHello("Nishant");

    function addNumbers($num1 = 10, $num2 = 20){
        return $num1 + $num2;
    }

    function formatBlog($blog){
        echo "{$blog['title']}'s author is {$blog['author']} and it has {$blog['likes']} likes. <br />";
    }

    formatBlog(["title" => "Nishant's Blog", "author" => "nishant", "likes" => 20]);
    $sum = addNumbers();
    echo $sum;

    $gender = $_COOKIE["gender"] ?? "Unknown";
    echo $gender;
?>