<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $numbersString = $_POST["numbers"];


  $numbers = explode(",", $numbersString);


  foreach ($numbers as $number) {
    $number = intval($number);
    if ($number % 2 == 0) {
      echo $number . "<br>";
   }
}
}


?>
