<?php
    if(isset($_POST["submit"])){
        setcookie("gender", $_POST["gender"], time() + 86400);

        header("Location: functions.php");
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
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <select name="gender" id="">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>