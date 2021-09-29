<?php session_start();?>
<?php 
 $hotels = 
 array(
   array(''=>"<img style='width:150px;' src='images/the-commodore-hotel.jpg' alt='The Rustic Hotel'>", 'Name'=>'The Commodore Hotel', 'Description'=>'Upmarket hotel with a view of the ocean and private beach access.', 'Pool'=>'Yes', 'WiFi'=>'Yes', 'Ocean view'=>'Yes', 'Pets allowed'=>'No', 'button'=>"<form action='email.php' method='post'><button>Book</button></form>"),
   array(''=>"<img style='width:150px;' src='images/the-rustic-hotel.jpg' alt='The Rustic Hotel'>",'Name'=>'The Rustic Hotel', 'Description'=>'Friendly and down-to-earth accommodation close to public beaches, shops and nightlife.', 'Pool'=>'No', 'WiFi'=>'Yes', 'Ocean view'=>'Yes', 'Pets allowed'=>'Yes', 'button'=>"<form action='email.php' method='post'><button>Book</button></form>"),
 );

 file_put_contents('hotels.json', json_encode($hotels, JSON_PRETTY_PRINT));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking App</title>
</head>
<body>

<form action="booking.php" method="post">

 <label for="hotel">Choose a hotel:</label>

  <select name="hotel">
    <option value="The Commodore Hotel" name="CommodoreHotel">The Commodore Hotel</option>
    <option value="The Rustic Hotel" name="RusticHotel">The Rustic Hotel</option>
  </select>
  <br>

  <label for="name">First Name</label>
  <input type="text" name="name">
  <br>

  <label for="surname">Surname</label>
  <input type="text" name="surname">
  <br>

  <label for="emailAddress">Email Address</label>
  <input type="text" name="emailAddress">
  <br>

  <input type="hidden" name="numberOfDays">
  <br>

  <label for="checkInDate">Check-in Date</label>
  <input type="date" name="checkInDate">
  <br>

  <label for="checkOutDate">Check-out Date</label>
  <input type="date" name="checkOutDate">
  <br><br>

  <input type="submit">

</form> 
<br><br><br>
       
 <!--DISPLAY HOTELS-->
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
      else if ($key === 'button'){
        echo "<br>";
      }
      else {
      
        echo $key . ": " . $value . "<br>";
      }
    }
    echo "</td>";
}

// print_r($hotels);
echo $hotels['0']['0'];

?>
</tr>
</table>
  
</body>
</html>