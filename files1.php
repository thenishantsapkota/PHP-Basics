<?php 
    $fileName = "readme.txt";
    if(file_exists($fileName)){ 
        // Read file
        $file = readfile($fileName);

        echo $file;
        // Find real path of the file
        echo realpath($fileName);

        // Find size of the file
        echo filesize($fileName);

        //rename file
        // rename($fileName, "baun.txt")
    }else{
        echo "File doesn't exist";
    }
  
    
    mkdir("test");
?>