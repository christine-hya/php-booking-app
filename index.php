<?php session_start();?>
<?php 
 $hotels = 
 array(
   array(''=>"<img style='width:150px;' src='images/the-commodore-hotel.jpg' alt='The Commodore Hotel'>", 'Name'=>'The Commodore Hotel', 'Description'=>'Upmarket hotel with a view of the ocean and private beach access.', 'Pool'=>'Yes', 'WiFi'=>'Yes', 'Ocean view'=>'Yes', 'Pets allowed'=>'No', 'button'=>"<form action='email.php' method='post'><button class='button'>Book</button></form>"),
   array(''=>"<img style='width:150px;' src='images/the-rustic-hotel.jpg' alt='The Rustic Hotel'>",'Name'=>'The Rustic Hotel', 'Description'=>'Friendly and down-to-earth accommodation close to public beaches, shops and nightlife.', 'Pool'=>'No', 'WiFi'=>'Yes', 'Ocean view'=>'Yes', 'Pets allowed'=>'Yes', 'button'=>"<form action='email.php' method='post'><button class='button'>Book</button></form>"),
 );
 file_put_contents('hotels.json', json_encode($hotels, JSON_PRETTY_PRINT));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Paradise Hotels</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
</head>
<body>

<div id="background"></div>

<!--BOOKING FORM GRID-->

<div class="booking-form-container">

<form class="booking-form" action="booking.php" method="post">

<div class="bookingform-grid-container">
<div class="item-a">
 <label for="hotel">Choose a hotel:</label>
  <select name="hotel">
    <option value="The Commodore Hotel" name="CommodoreHotel">The Commodore Hotel</option>
    <option value="The Rustic Hotel" name="RusticHotel">The Rustic Hotel</option>
  </select>
  <!-- <br> -->
  </div>

  <div class="item-b">
  <label for="name">First Name</label>
  <input type="text" name="name" placeholder="Your name">
  </div>

  <div class="item-c">
  <label for="surname">Surname</label>
  <input type="text" name="surname" placeholder="Your surname">
  <!-- <br> -->
  </div>

  <div class="item-d">
  <label for="emailAddress">Email Address</label>
  <input type="text" name="emailAddress" placeholder="Your email address" class="email">
  <!-- <br> -->
 </div>

  <input type="hidden" name="numberOfDays">

  <div class="item-e">
  <label for="checkInDate">Arrival</label>
  <input class="font-lighter date-picker" type="date" name="checkInDate">
  <!-- <br> -->
  </div>

  <div class="item-f">
  <label for="checkOutDate">Departure</label>
  <input class="font-lighter date-picker" type="date" name="checkOutDate">
  <!-- <br><br> -->
  </div>

  <div class="item-g">
  <input class="button" type="submit">
  </div>

  </div>
</form> 

</div>

<br><br><br>
<!--HOTELS-->

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
          <a class="button-2" href="https://en.wikivoyage.org/wiki/Chicago">View Gallery</a>
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
          <a class="button-2" href="https://en.wikivoyage.org/wiki/Chicago">View Gallery</a>
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
  
</body>
</html>