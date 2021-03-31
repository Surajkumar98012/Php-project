<!DOCTYPE html>
<html>
<head>
  <title>Assignment 4</title>
  <style type="text/css">
    body {
      background-image: url(1.jpg);
    }
  </style>
</head>
<body>
  <h1 style="color: white;text-align: center;text-decoration: underline;">Visit Counter</h1>

<div style="font-size: 2.5em;color: white;text-align: center;padding-top: 80px;">
  <?php $manage = fopen("pagecounter.txt", "r");
   if(!$manage){ echo "could not open the file" ; }
    else { $counter = (int ) fread($manage,20);
     fclose ($manage); $counter++;
       echo" <strong> This page has recived ". $counter . " visits up to now. </strong> " ;
       $manage = fopen("pagecounter.txt", "w" );
     fwrite($manage,$counter) ;
     fclose ($manage) ;
      }
   ?>
</div>


</body>
</html>
