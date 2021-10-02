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
        echo "<p class='compare-message'>You are booking The Rustic Hotel for " . $numberOfDays . " nights at R". $total . ". The Commodore Hotel is R" . $result . " for the same amount of nights. 
        <br>Are you sure you want to go ahead? Compare the features below and confirm.</p>";
            break;
        case 'The Commodore Hotel':
        $result = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking The Commodore Hotel for ". $numberOfDays . " nights at R" .$total. ". The Rustic Hotel is R" . $result . " for the same amount of nights.
        <br>Are you sure you want to go ahead? Compare the features below and confirm.</p>";
            break;
    }

    // echo "<br><br>";
    // echo "Price of other hotel" . "<br><br>" . $result;
 

// print_r($hotels);
// echo "<br><br>";
// print_r($userInfo);

?>

<!--HOTEL INFO-->

<div class="card-container">
    <div class="flex-container">

<!--CARD 1-->
<div class="card">
<div class="card-image" style="background-image: url(images/the-commodore-hotel.jpg)"></div>
  <div class="card-content">
  
    <h1>The Commodore Hotel</h1>
    <div class="subtitle">A luxury retreat</div>
    <p>
    Upmarket hotel with a view of the ocean and private beach access. The Commodore Hotel is for those seeking a luxury
    experience and a truly relaxing time away.<br>
    Pool: Yes<br>
    WiFi: Yes<br>
    Ocean view: Yes<br>
    Pets allowed: No<br>
    </p>


    <div class="card-details">
      <div class="card-details-inner">
        <div class="read-more">
        <form action='email.php' method='post'><button class='button-2'>Book</button></form>
        </div>
        <div class="options">
          <div class="comments">
            <a href="#!">
              <i class="fa fa-comments-o"></i>
              16 comments
            </a>
          </div>
          <div class="likes">
            <a href="#!">
              <i class="fa fa-heart-o"></i>
              322 likes
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--CARD 2-->

<div class="card">
<div class="card-image" style="background-image: url(images/the-rustic-hotel.jpg)"></div>
  <div class="card-content">
  
    <h1>The Rustic Hotel</h1>
    <div class="subtitle">An atmospheric getaway</div>
    <p>
    A friendly and down-to-earth hotel close to public beaches, shops and nightlife. The Rustic Hotel is for young people looking 
    to be close to the action and fully soak up the city's atmosphere.<br>
    Pool: No<br>
    WiFi: Yes<br>
    Ocean view: Yes<br>
    Pets allowed: Yes<br>
    </p>

    <div class="card-details">
      <div class="card-details-inner">
        <div class="read-more">
        <form action='email.php' method='post'><button class='button-2'>Book</button></form>
        </div>
        <div class="options">
          <div class="comments">
            <a href="#!">
              <i class="fa fa-comments-o"></i>
              16 comments
            </a>
          </div>
          <div class="likes">
            <a href="#!">
              <i class="fa fa-heart-o"></i>
              322 likes
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 </div>
</div>

<br><br><br><br>




 