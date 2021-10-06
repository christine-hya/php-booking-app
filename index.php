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
    <link rel="icon" href="images/paradise-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>

<body>

<!--TITLE IMAGE-->
<header>
  <div id="background">
    <div class="title-container">  
      <h1 class="title">Paradise Hotels</h1>
      <p class="tagline">Book your dream holiday.</p>
      <a href="#call-to-action"><i class="arrow-down bounce fas fa-angle-double-down fa-2x"></i></a>
   </div>
 </div>
</header>

<!--CALL-TO-ACTION MESSAGE-->
<div id="call-to-action" class="call-to-action">
    <h2>Need a reboot?</h2>
    <p>Take a look at our one-of-a-kind hotels for a rejuvinating holiday experience. Scroll
    down to see our offering and fill in the booking form to do a price comparison.<br><br>
    <button class="button center">Book<a href="#booking-form"> <i class="arrow fas fa-level-down-alt"></i></a></button>
    </p>
</div>

<!--HOTEL INFO-->
<div class="card-container">
    <div class="flex-container">

<!--CARD 1-->
<div class="card">
<div class="card-image" style="background-image: url(images/the-commodore-hotel.jpg)"></div>
  <div class="card-content">
  
    <h1>The Commodore Hotel</h1>
    <div class="subtitle">A luxury retreat</div>
    <p class="hotel-info">
    Upmarket hotel with a view of the ocean and private beach access. The Commodore Hotel is for those seeking a luxury
    experience and a truly relaxing time away.<br><br>
    <i class="fas fa-swimmer"></i> Pool: Yes<br>
    <i class="fas fa-wifi"></i>  WiFi: Yes<br>
    <i class="fas fa-umbrella-beach"></i>  Ocean view: Yes<br>
    <i class="fas fa-paw"></i>  Pets allowed: No<br>
    </p>

    <div class="card-details">
      <div class="card-details-inner">
        <div class="read-more">
          <button class="button modal-btn-1">View Gallery</button>
        </div>
        <div class="options">
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

<!--CARD 2-->
<div class="card">
<div class="card-image" style="background-image: url(images/the-rustic-hotel.jpg)"></div>
  <div class="card-content">
  
    <h1>The Rustic Hotel</h1>
    <div class="subtitle">An atmospheric getaway</div>
    <p>
    A friendly and down-to-earth hotel close to public beaches, shops and nightlife. The Rustic Hotel is for young people looking 
    to be close to the action and fully soak up the city's atmosphere.<br><br>
    <i class="fas fa-swimmer"></i> Pool: No<br>
    <i class="fas fa-wifi"></i> WiFi: Yes<br>
    <i class="fas fa-umbrella-beach"></i> Ocean view: Yes<br>
    <i class="fas fa-paw"></i> Pets allowed: Yes<br>
    </p>

    <div class="card-details">
      <div class="card-details-inner">
        <div class="read-more">
          <button class="button modal-btn-2">View Gallery</button>
        </div>
        <div class="options">
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

 </div>
</div>

<br><br><br>

<!--BOOKING FORM GRID-->
<div id="booking-form" class="booking-form-container">

<form class="booking-form" action="booking.php" method="post">

<div class="bookingform-grid-container">
<div class="item-a">
  <label for="hotel">Choose a hotel:</label>
    <select name="hotel">
      <option value="The Commodore Hotel" name="CommodoreHotel">The Commodore Hotel</option>
      <option value="The Rustic Hotel" name="RusticHotel">The Rustic Hotel</option>
    </select>
</div>

  <div class="item-b">
    <label for="name">First Name</label>
    <input type="text" name="name" placeholder="Your name">
  </div>

  <div class="item-c">
    <label for="surname">Surname</label>
    <input type="text" name="surname" placeholder="Your surname">
  </div>

  <div class="item-d">
    <label for="emailAddress">Email Address</label>
    <input type="text" name="emailAddress" placeholder="Your email address" class="email">
 </div>

  <input type="hidden" name="numberOfDays">

  <div class="item-e">
    <label for="checkInDate">Arrival</label>
    <input class="font-lighter date-picker" type="date" name="checkInDate">
  </div>

  <div class="item-f">
    <label for="checkOutDate">Departure</label>
    <input class="font-lighter date-picker" type="date" name="checkOutDate">
  </div>

  <div class="item-g">
    <input class="button submit-button" type="submit">
  </div>

  </div>
</form> 

</div>

<!--MODAL 1-->
<div class="modal-overlay-1">
  <div class="modal-container">
  <a class="close-btn-1">X</a>
</div> 

  <!--HOTEL GALLERY-->
<div class="container">
  <div class="grid">
    <div class="cell">
      <img src="images/the-commodore-hotel-1.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-commodore-hotel-2.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-commodore-hotel-3.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-commodore-hotel-4.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-commodore-hotel-5.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-commodore-hotel-6.jpg" class="responsive-image" />
    </div>
  </div>
</div>

</div>

<!--MODAL 2-->
<div class="modal-overlay-2">
  <div class="modal-container">
  <a class="close-btn-2">X</a>
</div> 

  <!--HOTEL GALLERY-->
<div class="container">

  <div class="grid">
    <div class="cell">
      <img src="images/the-rustic-hotel-1.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-rustic-hotel-2.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-rustic-hotel-3.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-rustic-hotel-4.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-rustic-hotel-5.jpg" class="responsive-image" />
    </div>
    <div class="cell">
      <img src="images/the-rustic-hotel-6.jpg" class="responsive-image" />
    </div>
  </div>
</div>

</div>

<script src="scripts/bookingapp.js"></script>  
</body>
</html>