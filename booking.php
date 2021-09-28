<?php 
session_start();

if ($_POST['name'] === '' || $_POST['surname'] === '' || $_POST['emailAddress'] === ''
|| $_POST['checkInDate'] === '' || $_POST['checkOutDate'] === ''
|| $_POST['hotel'] === '') {
    exit('Please fill in the required fields!');
  }
if ($_POST['durationStay'] <= 0) {
    exit('Number must be larger than 0');
}
else {
    $_SESSION['hotel'] = $_POST['hotel'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['emailAddress'] = $_POST['emailAddress'];
    $_SESSION['durationStay'] = $_POST['durationStay'];
    $_SESSION['checkInDate'] = $_POST['checkInDate'];
    $_SESSION['checkOutDate'] = $_POST['checkOutDate'];


    $hotelName = $_SESSION['hotel'];
    $numberOfDays = $_SESSION['durationStay'];


        if ($hotelName === "The Commodore Hotel" ){
            $price = "R500"; 
        }
        else if ($hotelName === "The Rustic Hotel") {
            $price = "R350";
        }
}

 echo "You are booking: ". $hotelName;
 echo "<br>";
 echo "Number of days: " . $numberOfDays;
 echo "<br>";
 echo "Daily rate: " . $price;
 echo "<br>";
 echo "Total: ";
 echo "<br>";
 echo "<form action='compare.php' method'post'>";
 echo "<input type='hidden' name='hoteltoCompare'>";
 echo "<button>Compare</button>";
 echo "</form>";

?>