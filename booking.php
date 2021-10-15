<?php 
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="icon" href="images/paradise-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Crimson+Text&display=swap" rel="stylesheet">
</head>


<?php
$_SESSION['hotel'] = $_POST['hotel'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['emailAddress'] = $_POST['emailAddress'];
$_SESSION['numberOfDays'] = $_POST['numberOfDays'];
$_SESSION['checkInDate'] = $_POST['checkInDate'];
$_SESSION['checkOutDate'] = $_POST['checkOutDate'];

class Booking {
    public $hotelName;
    public $numberOfDays;
    public $price;
    private $name;
    private $surname;

    //CONSTRUCTOR
    public function __construct($hotelName, $name, $surname, $checkInDate, $checkOutDate) {
        $this->hotelName = $hotelName;     
        $this->price = $price; 
        $this->name = $name;
        $this->surname = $surname;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;

        if ($this->hotelName === "The Commodore Hotel"){
            $this->price = 500; 
        }
        else if ($this->hotelName === "The Rustic Hotel") {
            $this->price = 350;
        }
        else if ($this->hotelName === "The Sunset Hotel") {
          $this->price = 550;
        }
        else if ($this->hotelName === "Hotel Tropico") {
        $this->price = 400;
        }
        else if ($this->hotelName === "Tranquility Hotel") {
          $this->price = 350;
        }
        else if ($this->hotelName === "Mountain View Hotel") {
          $this->price = 450;
        }  
        $_SESSION['price'] = $this->price;  

    }

    //GETTERS AND SETTERS
    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    //METHODS
    public function calculateTotal() {
        $numberOfDays = $this->calculateStay();
        $sum = $numberOfDays*$this->price;
        return $sum;
    }

    public function calculateStay() {
    
        $earlier = new DateTime($this->checkInDate);
        $later = new DateTime($this->checkOutDate);
        $dateDifference = $later->diff($earlier)->format("%a"); 
        return $dateDifference;
    }

    public function addNumberOfDaysToArray() {
        $_POST['numberOfDays'] = $this->calculateStay();
    }

    public function addTotalToArray() {
        $_POST['total'] = $this->calculateTotal();
    }

    public function displayBookingDetails() {
        echo "<div class='booking-message'>";
        echo "<div class='grid'><div class='cell-booking-msg'>";
        echo "Hi ". $this->getName();
        echo " " . $this->getSurname();
        echo "<br>";
        echo "You have selected:<br><strong> ". $this->hotelName;
        echo "</strong><br>";
        echo "<br>Number of days: " . $this->calculateStay();
        echo "<br>";
        echo "Daily rate: R" . $this->price;
        echo "<br>";
        echo "Total: R" . $this->calculateTotal();
        echo "<br><br>";
        echo "<form action='compare.php' method='post'>";
        echo "<label for='hoteltoCompare'>Choose a hotel to compare:</label>";
        echo "<select class='hotel-options' name='hoteltoCompare'>";

        if ($this->hotelName == 'The Commodore Hotel') {
           echo "<option value='The Rustic Hotel' name='RusticHotel'>The Rustic Hotel</option>"; 
           echo "<option value='The Sunset Hotel' name='TheSunsetHotel'>The Sunset Hotel</option>";
           echo "<option value='Hotel Tropico' name='HotelTropico'>Hotel Tropico</option>";
           echo "<option value='Tranquility Hotel' name='TranquilityHotel'>Tranquility Hotel</option>";
           echo "<option value='Mountain View Hotel' name='MountainViewHotel'>Mountain View Hotel</option>";      
        }   
        
        if ($this->hotelName == 'The Rustic Hotel') {
          echo "<option value='The Commodore Hotel' name='CommodoreHotel'>The Commodore Hotel</option>";
          echo "<option value='The Sunset Hotel' name='TheSunsetHotel'>The Sunset Hotel</option>";
          echo "<option value='Hotel Tropico' name='HotelTropico'>Hotel Tropico</option>";
          echo "<option value='Tranquility Hotel' name='TranquilityHotel'>Tranquility Hotel</option>";
          echo "<option value='Mountain View Hotel' name='MountainViewHotel'>Mountain View Hotel</option>";
        }

        if ($this->hotelName == 'The Sunset Hotel') {
          echo "<option value='The Commodore Hotel' name='CommodoreHotel'>The Commodore Hotel</option>";
          echo "<option value='The Rustic Hotel' name='RusticHotel'>The Rustic Hotel</option>";
          echo "<option value='Hotel Tropico' name='HotelTropico'>Hotel Tropico</option>";
          echo "<option value='Tranquility Hotel' name='TranquilityHotel'>Tranquility Hotel</option>";
          echo "<option value='Mountain View Hotel' name='MountainViewHotel'>Mountain View Hotel</option>";
        }

        if ($this->hotelName == 'Hotel Tropico') {
          echo "<option value='The Commodore Hotel' name='CommodoreHotel'>The Commodore Hotel</option>";
          echo "<option value='The Rustic Hotel' name='RusticHotel'>The Rustic Hotel</option>";
          echo "<option value='The Sunset Hotel' name='TheSunsetHotel'>The Sunset Hotel</option>";
          echo "<option value='Tranquility Hotel' name='TranquilityHotel'>Tranquility Hotel</option>";
          echo "<option value='Mountain View Hotel' name='MountainViewHotel'>Mountain View Hotel</option>";
        }

        if ($this->hotelName == 'Tranquility Hotel') {
          echo "<option value='The Commodore Hotel' name='CommodoreHotel'>The Commodore Hotel</option>";
          echo "<option value='The Rustic Hotel' name='RusticHotel'>The Rustic Hotel</option>";         
          echo "<option value='The Sunset Hotel' name='TheSunsetHotel'>The Sunset Hotel</option>";
          echo "<option value='Hotel Tropico' name='HotelTropico'>Hotel Tropico</option>";
          echo "<option value='Mountain View Hotel' name='MountainViewHotel'>Mountain View Hotel</option>";
        }

        if ($this->hotelName == 'Mountain View Hotel') {
          echo "<option value='The Commodore Hotel' name='CommodoreHotel'>The Commodore Hotel</option>";
          echo "<option value='The Rustic Hotel' name='RusticHotel'>The Rustic Hotel</option>";         
          echo "<option value='The Sunset Hotel' name='TheSunsetHotel'>The Sunset Hotel</option>";
          echo "<option value='Hotel Tropico' name='HotelTropico'>Hotel Tropico</option>";
          echo "<option value='Tranquility Hotel' name='TranquilityHotel'>Tranquility Hotel</option>";
        }

        echo "</select><br><br>";
        echo "<br><button class='button price-button'>Compare Price</button>";
        echo "</form></div>";

        if ($this->hotelName == 'The Commodore Hotel') {
        echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/the-commodore-hotel.jpg' alt='The Commodore Hotel'></div>"; 
        }

        if ($this->hotelName == 'The Rustic Hotel') {
        echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/the-rustic-hotel.jpg' alt='The Rustic Hotel'></div>"; 
        }

        if ($this->hotelName == 'The Sunset Hotel') {
        echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/the-sunset-hotel.jpg' alt='The Sunset Hotel'></div>";
        }

        if ($this->hotelName == 'Hotel Tropico') {
        echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/tropico-hotel.jpg' alt='Hotel Tropico'></div>";  
        }

        if ($this->hotelName == 'Tranquility Hotel') {
          echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/tranquility-hotel.jpg' alt='Tranquility Hotel'></div>";  
        }

        if ($this->hotelName == 'Mountain View Hotel') {
          echo "<div class='cell-booking-msg'><img class='booking-msg-img' src='images/mountainview-hotel.jpg' alt='Mountain View Hotel'></div>";  
        }

        echo "</div>";
        echo "</div>";
    }         
}

if ($_POST['name'] === '' || $_POST['surname'] === '' || $_POST['emailAddress'] === ''
|| $_POST['checkInDate'] === '' || $_POST['checkOutDate'] === ''
|| $_POST['hotel'] === '') {
    exit('Please fill in the required fields!');
  }

else {
   $booking = new Booking($_SESSION['hotel'], $_SESSION['name'], $_SESSION['surname'], $_SESSION['checkInDate'], $_SESSION['checkOutDate']);
   $booking->addNumberOfDaysToArray();
   $booking->addTotalToArray();
   $booking->displayBookingDetails();        
}

$_SESSION['numberOfDays'] = $_POST['numberOfDays'];
$_SESSION['total'] = $_POST['total'];
file_put_contents('userinfo.json', json_encode($_SESSION, JSON_PRETTY_PRINT));
 
?>


<!--GALLERY-->
<body>
    <div class="gallery-container">
      <div class="grid">
        <div class="cell">
          <img src="images/holiday-gallery-2.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-3.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-6.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-5.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-4.jpg" class="responsive-image" />
        </div>
        <div class="cell">
          <img src="images/holiday-gallery-9.jpg" class="responsive-image" />
        </div>
      </div>
    </div>
</body>
</html>