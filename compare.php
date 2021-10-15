<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compare</title>
  <link rel="icon" href="images/paradise-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  
<?php

$jsonHotels = file_get_contents('hotels.json');
$hotels = json_decode($jsonHotels, true);

$jsonUserinfo = file_get_contents('userinfo.json');
$userInfo = json_decode($jsonUserinfo, true);

$numberOfDays = $userInfo['numberOfDays'];
$total = $userInfo['total'];
$price = $userInfo['price'];
$hotelName = $userInfo['hotel'];
$hoteltoCompare = $_POST['hoteltoCompare'];



    switch ($hoteltoCompare) {
        case 'The Commodore Hotel':
        $comparisonPrice = $numberOfDays*500;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total 
        . "</strong>. The Commodore Hotel is R" . $comparisonPrice . " for the same duration.
        <br>Are you sure you want to go ahead? Compare the features below and confirm by clicking 'Book now'.</p>";
            break;

        case 'The Rustic Hotel':
        $comparisonPrice = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for " 
        . $numberOfDays . " nights at <strong>R". $total . "</strong> (R" . $price . " per night).
        The Rustic Hotel is R" . $comparisonPrice . " for the same duration. 
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;

        case 'The Sunset Hotel':
        $comparisonPrice = $numberOfDays*550;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        The Sunset Hotel is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;  
            
        case 'Hotel Tropico':
        $comparisonPrice = $numberOfDays*400;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        Hotel Tropico is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;  
            
        case 'Tranquility Hotel':
        $comparisonPrice = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        Tranquility Hotel is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;

        case 'Mountain View Hotel':
        $comparisonPrice = $numberOfDays*350;
        echo "<p class='compare-message'>You are booking <strong>" . $hotelName . "</strong> for "
        . $numberOfDays . " nights at <strong>R" .$total . "</strong> (R" . $price . " per night).
        Mountain View Hotel is R" . $comparisonPrice . " for the same duration.
        <br>Compare the hotels below and confirm by clicking 'Book now'.</p>";
            break;                
    }

?>

<!--HOTEL INFO-->
<div class="card-container">
    <div class="flex-container">

<?php

//CHOSEN HOTEL
if ($hotelName == 'The Commodore Hotel') {
  // <!--CARD 1-->
echo "<div class='card'>
<div class='card-image' style='background-image: url(images/the-commodore-hotel.jpg)'></div>

  <div class='card-content'>
  
    <h1>The Commodore Hotel</h1>
    <div class='subtitle'>A luxury retreat</div>
    <p>
    Upmarket hotel with a view of the ocean and private beach access. The Commodore Hotel is for those seeking a luxury
    experience and a truly relaxing time away.<br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i>  WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
    <i class='fas fa-paw'></i>  Pets allowed: No<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733 &#9733
          </div>
          <div>
              322 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 ";
}

if ($hotelName == 'The Rustic Hotel') {
  // <!--CARD 2-->
echo "<div class='card'>
<div class='card-image' style='background-image: url(images/the-rustic-hotel.jpg)'></div>
  <div class='card-content'>
  
    <h1>The Rustic Hotel</h1>
    <div class='subtitle'>An atmospheric getaway</div>
    <p>
    A friendly and down-to-earth hotel close to public beaches, shops and nightlife. The Rustic Hotel is for young people looking 
    to be close to the action and fully soak up the city's atmosphere.<br><br>
    <i class='fas fa-swimmer'></i> Pool: No<br>
    <i class='fas fa-wifi'></i> WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i> Ocean view: Yes<br>
    <i class='fas fa-paw'></i> Pets allowed: Yes<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733
          </div>
          <div>
            453 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
}

// COMPARISON

if ($hoteltoCompare == 'The Commodore Hotel') {
  echo "<div class='card'>
<div class='card-image' style='background-image: url(images/the-commodore-hotel.jpg)'></div>

  <div class='card-content'>
  
    <h1>The Commodore Hotel</h1>
    <div class='subtitle'>A luxury retreat</div>
    <p>
    Upmarket hotel with a view of the ocean and private beach access. The Commodore Hotel is for those seeking a luxury
    experience and a truly relaxing time away.<br><br>
    <i class='fas fa-swimmer'></i> Pool: Yes<br>
    <i class='fas fa-wifi'></i>  WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i>  Ocean view: Yes<br>
    <i class='fas fa-paw'></i>  Pets allowed: No<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733 &#9733
          </div>
          <div>
              322 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 ";
}

if ($hoteltoCompare == 'The Rustic Hotel') {
  echo "<div class='card'>
<div class='card-image' style='background-image: url(images/the-rustic-hotel.jpg)'></div>
  <div class='card-content'>
  
    <h1>The Rustic Hotel</h1>
    <div class='subtitle'>An atmospheric getaway</div>
    <p>
    A friendly and down-to-earth hotel close to public beaches, shops and nightlife. The Rustic Hotel is for young people looking 
    to be close to the action and fully soak up the city's atmosphere.<br><br>
    <i class='fas fa-swimmer'></i> Pool: No<br>
    <i class='fas fa-wifi'></i> WiFi: Yes<br>
    <i class='fas fa-umbrella-beach'></i> Ocean view: Yes<br>
    <i class='fas fa-paw'></i> Pets allowed: Yes<br>
    </p>

    <div class='card-details'>
      <div class='card-details-inner'>
        <div class='read-more'>
        <form action='email.php' method='post'><button class='button'>Book now</button></form>
        </div>
        <div class='reviews'>
          <div>
              &#9733 &#9733 &#9733
          </div>
          <div>
            453 reviews
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  ";
}

?>    

 </div>
</div>


</body>
</html>

 