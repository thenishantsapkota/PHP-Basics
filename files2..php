<?php 
    $file = "readme.txt";

    // open a file
    $handle = fopen($file, "a+");

    // read the file
    // echo fread($handle, filesize($file));

    //read a single line
    // echo fgets($handle);
    // echo fgets($handle);

    // read a single character
    // fgetc($handle);
    // fgetc($handle);

    //writing
    //fwrite($handle, "\nHello World");

    fclose($handle);
    unlink($file);
?>