<!DOCTYPE html>
<html>
<head>
  <title>Assignment 1</title>
  <style type="text/css">
    body {
      background-image: url(1.jpg);
    }
  </style>
</head>
<body>
  <h1  style="text-align: center;color: white;text-decoration: underline;">My First php Script</h1><br>
  <br><br><br><br>


<div style="font-size: 1.5em;font-weight: bolder;color: white;">
  <?php
   $Sentence=" Hello everyone! ,this is My Sentence."; //predifined variable
   echo "The Sentence You entered is :";//output the result through echo in php
  ?>
</div>

<div style="font-size: 1.2em;color: rgba(225,215,210,0.9);font-style: italic;"><?php
  echo "</br>"; //the is for trasfer of next line
  echo $Sentence; ?>

</div>

<div style="font-size: 1.5em;color: white;" >
  <?php
  echo "</br>";
   echo "It is composed of :";  ?>

</div>

<ul style="color:white;font-size: 1.2em;color: rgba(250,250,250,0.9);">
  <li><?php
      echo str_word_count($Sentence);//Here is the word counter in php
       ?> diffrent words</li>
  <li><?php
      echo strlen($Sentence);// This is Character counter in php
      ?>
   Chracter (included spaces)</li>
</ul>


</body>
</html>
