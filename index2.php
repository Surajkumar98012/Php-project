<!DOCTYPE html>
<html>
<head>
  <title>Assignment 2</title>
  <style type="text/css">
    body {
      background-image: url(1.jpg);
    }
  </style>
</head>
<body>
   <h1  style="text-align: center;color: white;text-decoration: underline;">My Second php Script</h1><br>
  <br><br>


  <div style="background-color: rgba(0,0,0,0.6);padding: 16px;">
    <h2 style="color: white;">Date :</h2>
  <div style="font-size: 1.2em;font-weight: bolder;color: rgba(225,215,210,0.9);line-height:0.1em;">
    <?php
      $mydate=getdate(date("U"));
      echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
      ?>

  </div>

  <h2 style="color: white;">Time :</h2>

  <div style="font-size: 1.2em;font-weight: bolder;color: rgba(225,215,210,0.9);line-height:0.1em;">
    <?php
     $dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
     echo $dateTime->format("H:i A");
      ?>

  </div>

  <h2 style="color: white;">Your table details :</h2>
  <div style="font-size: 1.2em;font-weight: bolder;color: rgba(245,245,245,0.9);">
   <?php
   $diameter=6;


   echo "Diameter :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
   echo $diameter;
    function circumference(){
         $diameter=6;
         $radius=$diameter/2;
         $circumference=3.14*pow($radius,2);

         echo $circumference;
   }
   echo "<br>";
   echo "circumference :&nbsp&nbsp&nbsp";
   circumference();
     function surfacearea(){
         $diameter=6;
         $radius=$diameter/2;
         $surfacearea=2*3.14*$radius;

         echo $surfacearea;
   }
   echo "<br>";
   echo "Surfacearea :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
   surfacearea();
    ?>
  </div>

  <h2 style="color: white;">The Length of triangle hypotenuse :</h2>
    <div style="font-size: 1.2em;font-weight: bolder;color: rgba(245,245,245,0.9);">
   <?php
   $side_a=3;
   $side_b=2;


   echo "Side a :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
   echo $side_a;
/*    function circumference(){
         $side_a=3;
         $radius=$diameter/2;
         $circumference=3.14*pow($radius,2);

         echo $circumference;
   }*/
    echo "<br>";
    echo "Side b :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    echo $side_b;
     function hypotenuse(){
         $side_a=3;
         $side_b=4;
         $hypotenuse=pow(pow($side_a,2)+pow($side_b,2),(1/2));

         echo $hypotenuse;
   }
   echo "<br>";
   echo "hypotenuse :&nbsp&nbsp&nbsp&nbsp&nbsp";
   hypotenuse();
    ?>
  </div>
  </div>







</body>
</html>
