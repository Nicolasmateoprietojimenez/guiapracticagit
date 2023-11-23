<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["micookie"])){
        echo $_COOKIE["micookie"];
    }else{
        echo "Usted no ha creado ninguna cookie";
    }
        
    ?>
</body>
</html>