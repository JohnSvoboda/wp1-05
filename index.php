<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>proměnné</h1>
    <?php

    $vodkaPrice = 119 ;
    $homelessMoney = 25 ;
    $studentka = 17 ;
    $Muž = 40 ;
    $Podnikatel = 100 ;
    $obcani = 50 ;





     ?>
     <?php
     echo "Bezdomovec má $homelessMoney kc" ;
     $homelessMoney = $homelessMoney + $studentka ;
     echo "Soucítící studentka, čekající na vlak, vkládá do čepice 17 kč. Bezdomovec má $homelessMoney" ;
     $homelessMoney = $homelessMoney + $Muž ;
     echo "Muž, který právě skončil úspěšně s přijímacím pracovním pohovorem, věnuje bezdomovci peníze v hodnotě 40 Kč. Bezdomovec má $homelessMoney" ;
     $homelessMoney = $homelessMoney + $Podnikatel ;
     echo "Před vstupem do pendolina jde kolem bezdomovce bohatý podnikatel. Aby neměl těžkou peněženku zbaví se drobné bankovky v hodnotě 100 Kč.Bezdomovec má $homelessMoney" ;
     $homelessMoney = $homelessMoney - $skupina ;
     echo "Kolem čepice bezdomovce se nenápadně prochází skupinka nepřizpůsobivých spoluobčanů a sebere mu z ní 50 Kč. Bezdomovec má $homelessMoney" ;


     echo "Peníze Bezdomovce po navštěvě večerky:  $homelessMoney. "

     ?>

     <?php if ($homelessMoney >= $vodkaPrice)
     { $homelessMoney = $homelessMoney - $vodkaPrice ;
       echo "bezdomovec má vodku";
       

       # code...
     } ?>



  </body>
</html>
