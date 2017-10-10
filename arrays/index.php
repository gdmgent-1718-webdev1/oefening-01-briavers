<?php
//Associatieve array
    $a1 = [];

    $a1[] = 'Lorem';
    $a1[] = 'ipsum';
    $a1[] = 1;

    var_dump($a1);

    echo count($a1);

    //this can be made faster
    //for ($i = 0; $i < count(a); $i++){ }
    //like this
    //by first declering the count as a var you win speed
    //for some magic reason $i++ is slower then ++$i

    $count = count($a1);
    for ($i = 0; $i< $count; ++$i){
        echo $a1[$i], PHP_EQL;
    }


    // nog een betere manier 
    foreach ($a1 as $arrayItem){
        echo $arrayItem, PHP_EOL;
    }




//Combinatie van beide soorten arrays
    $a2 = [];
    $a2[one] = [
        'NL' => 'een',
        'FR' => 'un',
        'EN' => 'one',
        'DE' => 'Eins',
    ];
    $a2[two] = [
        'NL' => 'twee',
        'FR' => 'deux',
        'EN' => 'two',
        'DE' => 'Zwei',
    ];

    var_dump($a2);

    echo $a2 ['two']['FR'], PHP_EOL;


//Combinatie van beide soorten arrays geschreven op een andere manier
    $a3 = [
        'one' => [
            'NL' => 'een',
            'FR' => 'un',
            'EN' => 'one',
            'DE' => 'Eins',
        ],
        'two' => [
            'NL' => 'twee',
            'FR' => 'deux',
            'EN' => 'two',
            'DE' => 'Zwei',
        ],
    ];



//Multidimensionele array


foreach($a3 as $word => $translation){
    foreach($translation as $iso => $translation){
        echo "woord `${word}` is ``${translation} (${iso}).", PHP_EOL;
    };
    foreach($translation as $iso => $translation){
        echo "woord `${word}` is ``${translation} (${iso}).", PHP_EOL;
    };


};