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

<div class="booking-form-container">

<form class="booking-form" action="booking.php" method="post">

 <label for="hotel">Choose a hotel:</label>

  <select name="hotel">
    <option value="The Commodore Hotel" name="CommodoreHotel">The Commodore Hotel</option>
    <option value="The Rustic Hotel" name="RusticHotel">The Rustic Hotel</option>
  </select>
  <br>
  <label for="name">First Name</label>
  <input type="text" name="name" placeholder="Your name">
  
  <label for="surname">Surname</label>
  <input type="text" name="surname" placeholder="Your surname">
  <br>

  <label for="emailAddress">Email Address</label>
  <input type="text" name="emailAddress" placeholder="Your email address">
  <br>

  <input type="hidden" name="numberOfDays">

  <label for="checkInDate">Check-in Date</label>
  <input class="font-lighter" type="date" name="checkInDate">
  <br>

  <label for="checkOutDate">Check-out Date</label>
  <input class="font-lighter" type="date" name="checkOutDate">
  <br><br>

  <input class="button" type="submit">

</form> 

</div>

<br><br><br>
       
 <!--DISPLAY HOTELS-->
<table class="hotel-display">
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
      else if ($key === 'button'){
        echo "<br>";
      }
      else {
      
        echo $key . ": " . $value . "<br>";
      }
    }
    echo "</td>";
}

echo $hotels['0']['0'];
?>

</tr>
</table>
  
</body>
</html>