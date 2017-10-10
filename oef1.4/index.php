<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.php oef 1.4</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
<?php
    // Hier komt PHP-code tussen de PHP-begintag en de PHP-eindtag.
    $i = 1;
    for ($i; $i<10; ++$i) {
        echo "<a href='./patroon-0$i.php'> patroon $i </a> <br>";
        
    }
    for ($i; $i<13; ++$i) {
        echo "<a href='./patroon-$i.php'> patroon $i </a> <br>";
        
    }

?>  
</body>
</html>