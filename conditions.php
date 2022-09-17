<?php
    # Conditional Statements

    // $price = 10;
    // if($price < 10){
    //     echo "Price seems to be less than 10";
    // }elseif($price === 10){
    //     echo "Price is equal to 10";
    // }
    // else{
    //     echo("Price is greater than 10");
    // }
    $blogs = [
        ["title"=>"Nishant's Diary", "author" =>"nishant", "content" =>"Lorem ipsum", "likes" =>20],
        ["title"=>"Madan's Diary", "author" =>"madan", "content" =>"Lorem ipsum", "likes" =>30],
        ["title"=>"Joshan's Diary", "author" =>"joshan", "content" =>"Lorem ipsum", "likes" =>40],
    ];

    foreach($blogs as $blog){
        // if($blog["likes"] > 10 && $blog["likes"] < 35){
        //     echo $blog["title"] . "<br />";
        // }
        if($blog["likes"] > 10 || $blog["likes"] < 35){
            echo $blog["title"] . "<br />";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Title</th>
            <th>Author </th>
        </thead>
        <tbody>
            <?php  foreach($blogs as $blog){ ?>
                <tr>
                <?php  if($blog["likes"] >= 20){?>
                    <td> <?php echo $blog["title"]; ?>
                    <td> <?php echo $blog["author"]; ?>
                </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>