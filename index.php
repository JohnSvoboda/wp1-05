<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>proměnné</h1>
    <?php

    $vodkaPrice = 345 ;
    $homelessMoney = 25 ;
    $studentka = 17 ;
    $Muž = 40 ;
    $Podnikatel = 100 ;
    $skupina = 50 ;





     ?>
     <p><?php
     echo "Bezdomovec má $homelessMoney kc" ;
     $homelessMoney = $homelessMoney + $studentka ; ?></p>
    <p> <?php  echo "Soucítící studentka, čekající na vlak, vkládá do čepice 17 kč. Bezdomovec má $homelessMoney" ;
     $homelessMoney = $homelessMoney + $Muž ; ?> </p>
  <p> <?php  echo "Muž, který právě skončil úspěšně s přijímacím pracovním pohovorem, věnuje bezdomovci peníze v hodnotě 40 Kč. Bezdomovec má $homelessMoney" ;
     $homelessMoney = $homelessMoney + $Podnikatel ; ?> </p>
    <p> <?php   echo "Před vstupem do pendolina jde kolem bezdomovce bohatý podnikatel. Aby neměl těžkou peněženku zbaví se drobné bankovky v hodnotě 100 Kč.Bezdomovec má $homelessMoney" ;
     $homelessMoney = $homelessMoney - $skupina ; ?> </p>
    <p> <?php echo "Kolem čepice bezdomovce se nenápadně prochází skupinka nepřizpůsobivých spoluobčanů a sebere mu z ní 50 Kč. Bezdomovec má $homelessMoney" ; ?> </p>


    <p> <?php echo "Peníze Bezdomovce před návštěvou večerky:  $homelessMoney. " ?> </p>




     <?php if ($homelessMoney >= $vodkaPrice)
     {
       $homelessMoney = $homelessMoney - $vodkaPrice ; ?>
      <p> <?php echo "bezdomovec má vodku"; ?> </p>
    <?php  } else { ?> <p> <?php echo "bezdomovec nemá peníze";

         # code...
       } ?>
        <p> <?php  echo "Peníze Bezdomovce po návštěvě večerky:  $homelessMoney"; ?> </p>






  </body>
</html>
