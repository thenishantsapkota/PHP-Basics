<?php
    # Multidimensional Arrays

    $blogsOne = [
        ["Nishant's Diary", "nishant", "Lorem ipsum", 20],
        ["Madan's Diary", "madan", "Lorem ipsum", 30],
        ["Joshan's Diary", "joshan", "Lorem ipsum", 40],
    ];

    // print_r($blogs);
    // print_r($blogs[0][1]);

    $blogs = [
        ["title"=>"Nishant's Diary", "author" =>"nishant", "content" =>"Lorem ipsum", "likes" =>20],
        ["title"=>"Madan's Diary", "author" =>"madan", "content" =>"Lorem ipsum", "likes" =>30],
        ["title"=>"Joshan's Diary", "author" =>"joshan", "content" =>"Lorem ipsum", "likes" =>40],
    ];

    // print_r($blogs);
    // echo $blogs[2]["author"];

    // echo count($blogs);
    $blogs[] = ["title" => "Prajita's Diary", "author" => "prajita", "content" => "Lorem ipsum", "likes" => 50];
    // print_r($blogs);

    $popped = array_pop($blogs);
    print_r($popped);
    // print_r($blogs);

?>