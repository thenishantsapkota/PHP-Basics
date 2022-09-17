<?php
    $blogs = [
        ["title"=>"Nishant's Diary", "author" =>"nishant", "content" =>"Lorem ipsum", "likes" =>20],
        ["title"=>"Madan's Diary", "author" =>"madan", "content" =>"Lorem ipsum", "likes" =>30],
        ["title"=>"Joshan's Diary", "author" =>"joshan", "content" =>"Lorem ipsum", "likes" =>40],
    ];

    foreach($blogs as $blog){
        if($blog["author"] == "joshan"){
            break; // Breaks out of the loop when the condition is met
        }
        echo $blog["title"]."<br />";
    }

    foreach($blogs as $blog){
        if($blog["author"] == "madan"){
            continue; // Ignores the code that fulfills the condition and continues working
        }
        echo $blog["title"]."<br />";
    }
?>