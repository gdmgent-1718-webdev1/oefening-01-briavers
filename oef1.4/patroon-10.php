<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index.php oef 1.10</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
 // Hier komt PHP-code tussen de PHP-begintag en de PHP-eindtag.

    
    
   $i = 0;
   $j = 0;
   for ($i = 0 ; $i<9 ; ++$i) {
    for ($j = 0 ; $j<9 ; ++$j) {
//schuine 1    
    if($i==8-$j){
        echo( "<div class='circle color-0'> </div>");
        
//schuine 2 
    }elseif($i==$j){
        echo( "<div class='circle color-0'> </div>");
        
//kleur 1 
    }elseif($i<8-$j && $i<$j ){
        echo( "<div class='circle color-2'> </div>");
    
//kleur 1  deel 2 onderkant kruis 
    }elseif($i>8-$j && $i>$j ){
        echo( "<div class='circle color-2'> </div>");
    

//kleur 2
    }else{
        echo( "<div class='circle color-1'> </div>");
    }
    
    };
    echo ("<br>");

};

?>  
</body>
</html>