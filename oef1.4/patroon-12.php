<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.php oef 1.12</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
 // Hier komt PHP-code tussen de PHP-begintag en de PHP-eindtag.

    
    
   $i = 0;
   $j = 0;
   for ($i = 0 ; $i<9 ; ++$i) {
    for ($j = 0 ; $j<9 ; ++$j) {

   if($i > $j-5 && $i< $j+5 && $i> 3-$j && $i < 13-$j){
        echo( "<div class='circle color-0'> </div>");

    
    }elseif($j<5){
        echo( "<div class='circle color-1'> </div>");
    
    }else{
        echo( "<div class='circle color-2'> </div>");
    }
    
    };
    echo ("<br>");

};

?>  
</body>
</html>