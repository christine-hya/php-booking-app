<?php session_start();?>
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
    <option value="The Cheap Hotel" name="CheapHotel">The Cheap Hotel</option>
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

  <label for="checkInDate">Check-in Date</label>
  <input type="date" name="checkInDate">
  <br>

  <label for="checkOutDate">Check-out Date</label>
  <input type="date" name="checkOutDate">
  <br><br>

  <input type="submit">

</form> 
    
</body>
</html>