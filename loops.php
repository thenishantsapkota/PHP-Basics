<?php
    $names = ["Joshan", "Milan", "Madan", "Nishant", "Shambhu"];

    # For loop
    // for($i = count($names)-1;$i >=0;$i--){
    //     echo "$names[$i]"."<br />";
    // }

    # Foreach loop
    // foreach($names as $name){
    //     echo "$name <br />";
    // }

    $blogs = [
        ["title"=>"Nishant's Diary", "author" =>"nishant", "content" =>"Lorem ipsum", "likes" =>20],
        ["title"=>"Madan's Diary", "author" =>"madan", "content" =>"Lorem ipsum", "likes" =>30],
        ["title"=>"Joshan's Diary", "author" =>"joshan", "content" =>"Lorem ipsum", "likes" =>40],
    ];

    // foreach($blogs as $blog){
    //     echo $blog['title']. " - ".$blog["author"];
    //     echo "<br />";
    // }
    // $i = 0;
    // while($i < count($names)){
    //     echo $names[$i] . "<br />";
    //     $i++;
    // }
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
            <th>Title</th>
            <th>Author</th>
        <tbody>
            
            <?php foreach($blogs as $blog){?>
                <tr>
                <td><?php echo $blog["title"];?></td>
                <td><?php echo $blog["author"];?></td>
                </tr>
            <?php } ?>
            
        </tbody>
    </table>
</body>
</html>