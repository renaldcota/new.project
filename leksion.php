<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container my-4">
    <h1 class="text-center"> LEKSIONE PHP</h1>

<?php
#switch case

$dita = "e Merkure";

switch($dita){

case "e Hene":
echo "<br> <p class= 'text-center'>Sot eshte e Hene.</p>";
break;

case "e Merkure":
echo '<br><p class= "text-center"> Sot nuk eshte e Hene.</p>';
break;

default:
echo "<p class= 'text-center'>Nuk e dime ca dite eshte</p>";

}
#KONSTANTET


define("GOOGLE_URL", "https://www.google.com");

echo 'Thank you for visiting -' . GOOGLE_URL . '<br>';

 ?>


 <div class="row">
   <div class="col-md-3 text-center">
     <?php

     # Ciklet ne PHP

     echo "<h5 style='color:red' class='text-center'> Afishoni numrat nga 1 deri ne 10 </h5>";

     $nr = 1;

     while($nr <= 10){

       echo $nr . '<br>';
       $nr++;

     }

      ?>

   </div>


   <div class="col-md-3 text-center">

     <h5> Numrat nga 0-100 me hap 10 </h5>

     <?php

     $nr2 = 0;

     while($nr2 <= 100){

       echo $nr2 . '<br>';
       $nr2 = $nr2 + 10;

     }

      ?>

   </div>

   <div class="col-md-3 text-center">

     <h5> Cikli me for</h5>
     <?php

for($i = 0; $i<=100; $i = $i+10){

  echo "$i <br>";
}

      ?>

   </div>

   <div class="col-md-3 text-center">

     <h5> Cikli me for nga 100-0</h5>
     <?php

for($i = 100; $i>=0; $i = $i-10){

  echo " $i <br>";
}

      ?>

   </div>

 </div>


<div class="row mt-3">

  <div class="col-md-4 border">

    <h5> Ciklet ne Arrays </h5>

    <?php

    # Madhesia e array : sizeof($arr)

$cars = array("Volvo", "BMW", "Fiat");

foreach ($cars as $key => $item){

  echo $item . ' ndodhet ne pozicionin: ' . $key . '<br>';
}



     ?>

  </div>

<div class="col-md-4  border">
  <?php

  $colors=array(
    "White" => "#fffff",
    "Black" => "#00000",
    "Red" => "#ff0000"
  );

  foreach ($colors as $key => $value) {
    echo " Kodi i $key eshte $value <br>";
  }

   ?>



</div>


</div>



      </div>

  </body>
</html>
