<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.php oef 1.07</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
 // Hier komt PHP-code tussen de PHP-begintag en de PHP-eindtag.

    
    
   $i = 0;
   $j = 0;
   for ($i = 0 ; $i<9 ; ++$i) {
    for ($j = 0 ; $j<9 ; ++$j) {
    
    if($i==$j){
        echo( "<div class='circle color-0'> </div>");
        

    }elseif($i>$j){
        echo( "<div class='circle color-1'> </div>");
        
    }else{
        echo( "<div class='circle color-2'> </div>");
    }
    
    };
    echo ("<br>");

};
   /*
echo( "<div class='layer-2'>");
   for ($i = 0 ; $i<9 ; ++$i) {
        for ($j = 0 ; $j<$i+1 ; ++$j) {
        echo( "<div class='circle color-2'> </div>");
        
        };
        echo ("<br>");

    };

echo( "</div>");
echo( "<div class='layer-3'>");
    for ($i = 0 ; $i<9 ; ++$i) {

        
        for ($j = 0 ; $j<$i ; ++$j) {
        echo( "<div class='circle color-1'> </div>");
        
        };
        echo ("</div><br>");

    };
echo( "</div>");*/
?>  
</body>
</html>