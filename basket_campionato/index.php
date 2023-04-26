<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

        
<?php
   /*
     PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i
    quali rappresentano delle partite di basket di
    un’ipotetica tappa del calendario. Ogni array della
    partita avrà una squadra di casa e una squadra
    ospite, punti fatti dalla squadra di casa e punti fatti
    dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo
    schema:
    Olimpia Milano - Cantù | 55 - 60
   */

                $campionato = [
                        'girone a'=>[
                                'casa' => 'Milano',
                                'ospiti' => 'Varese',
                                'punti' => 90 ,
                                'puntiOspiti' => 97,
                        ],
                        'girone b'=>[
                                'casa' => 'Firenze',
                                'ospiti' => 'Bologna',
                                'punti' => 79,
                                'puntiOspiti' => 81,
                        ],
                        'girone c'=>[
                                'casa' => 'Roma',
                                'ospiti' => 'Genova',
                                'punti' => 81,
                                'puntiOspiti' => 94,
                        ],
                        'girone d'=>[
                                'casa' => 'Krotone',
                                'ospiti' => 'Salerno',
                                'punti' => 90,
                                'puntiOspiti' => 93,
                        ],
                ];

                ?>
                <div class="test">
                <?php 

                $kiavi = array_keys($campionato);    
                //var_dump($kiavi);
                for ($i=0; $i < count($kiavi) ; $i++) { 
                        //var_dump($kiavi[$i]);
                //  var_dump($campionato[$kiavi[$i]]);
                        $kiave = $campionato[$kiavi[$i]];
                        
                        echo'<li>'.$kiave['casa']." "."punti"." ".$kiave['punti']." "."|"." "." ".$kiave['ospiti']." "."punti"." ".$kiave['puntiOspiti'].'</li>';
                }

                
                ?>

</div>
</body>
</html>