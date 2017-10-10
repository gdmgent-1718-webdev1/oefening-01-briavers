<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.php oef 1.08</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
 // Hier komt PHP-code tussen de PHP-begintag en de PHP-eindtag.

    
    
   $i = 0;
   $j = 0;
   for ($i = 0 ; $i<9 ; ++$i) {
    for ($j = 0 ; $j<9 ; ++$j) {
    
    if($i==8-$j){
        echo( "<div class='circle color-0'> </div>");
        

    }elseif($i>8-$j){
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