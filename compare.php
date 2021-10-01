<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compare</title>
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
</head>
<body>
  
</body>
</html>

<?php

$jsonHotels = file_get_contents('hotels.json');
$hotels = json_decode($jsonHotels, true);

$jsonUserinfo = file_get_contents('userinfo.json');
$userInfo = json_decode($jsonUserinfo, true);

$numberOfDays = $userInfo['numberOfDays'];
$total = $userInfo['total'];
$hotelName = $userInfo['hotel'];


    switch ($hotelName) {
        case 'The Rustic Hotel':
        $result = $numberOfDays*500;
        echo "You are booking The Rustic Hotel for " . $numberOfDays . " nights at R". $total . ". The Commodore Hotel is R" . $result . " for the same amount of nights. 
        <br>Are you sure you want to go ahead? Compare the features below and confirm.";
            break;
        case 'The Commodore Hotel':
        $result = $numberOfDays*350;
        echo "You are booking The Commodore Hotel for ". $numberOfDays . " nights at R" .$total. ". The Rustic Hotel is R" . $result . " for the same amount of nights.
        <br>Are you sure you want to go ahead? Compare the features below and confirm.";
            break;
    }

    // echo "<br><br>";
    // echo "Price of other hotel" . "<br><br>" . $result;
 

// print_r($hotels);
// echo "<br><br>";
// print_r($userInfo);

?>

<table>
    <tr>
  <?php
  
  $size = count($hotels);
  
  for($i = 0; $i < $size; $i++)
  {
    echo "<td>";
      foreach($hotels[$i] as $key => $value) {
        if ($key == '') {
          echo $value . "<br>";
        }
        else if ($key == 'button') {
          echo $value . "<br>";
        }
        else {
          echo $key . ": " . $value . "<br>";
        }
      }
      echo "</td>";
  }
  
  ?>
  </tr>
  </table>


 