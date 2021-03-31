<!DOCTYPE html>
<html>
<head>
  <title>Assignment 3</title>
   <style type="text/css">
    body {
      background-image: url(1.jpg);
    }

    #form_element{
      margin-top: 30px;
    }
  input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-radius: 25px;
  background-color: rgba(12,12,12,0.5);
  color: white;
}

.button {
  background-color:  rgba(12,12,12,0.8);
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 2px;
  border-radius: 25px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white;
  color: black;
  border: 2px solid rgba(12,12,12,0.8);
}

.button1:hover {
  background-color: rgba(12,12,12,0.8);
  color: white;
}
  </style>
</head>
<body style="text-align: center;">
  <h1 style="color: white;text-align: center;text-decoration: underline;">Number Guessing Game</h1><br>

<h1 style="color: white;">Please choose no. between 0 to 10</h1>
<p id="form_element">
<form action="" method="post">
<input type="text" name="Snumber">
<button class="button button1" type="submit" name="submit">Guess</button>
</form></p>
<div style="color: white;font-size: 1.8em;">
  <?php

    $Ssecret   = rand(0, 10);
    $Snumber = '';

    if (isset($_POST['submit'])) {
     $Snumber = $_POST['Snumber']; // Add this to set value for $Snumber variable
        switch($Snumber) {
        case ($Snumber < $Ssecret):
        echo " Your number is lower! <br />";
        break;
        case ($Snumber > $Ssecret):
        echo " Your number is higher! <br />";
        break;
        case ($Snumber == $Ssecret):
        echo " Congratulations! You guessed the hidden number. <br />";
        break;
        default:
        echo " You never set a number! <br />";
        break;
    }
    }
    ?>
</div>
</body>
</html>
