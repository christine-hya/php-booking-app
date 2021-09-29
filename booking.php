<?php 
session_start();

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
        echo "<button>Compare</button>";
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

// print_r($_POST);
 
?>

