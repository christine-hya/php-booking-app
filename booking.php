<?php 
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
        // $this->numberOfDays = $numberOfDays;
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
        echo "Hi ". $this->getName();
        echo " " . $this->getSurname();
        echo "<br>";
        echo "You are booking: ". $this->hotelName;
        echo "<br>";
        echo "Number of days: " . $this->calculateStay();
        echo "<br>";
        echo "Daily rate: R" . $this->price;
        echo "<br>";
        echo "Total: R" . $this->calculateTotal();
        echo "<br>";
        echo "<form action='compare.php' method'post'>";
        echo "<input type='hidden' name='hoteltoCompare'>";
        echo "<button class='button'>Compare</button>";
        echo "</form>";       
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

<body>
<div class="container">
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