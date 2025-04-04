<?php

$person = "Kelvin Harlt";
$city = "Dubai";
$eventDate = "April 4, 2016";

$age = 30;
$height = 65;
$maxAllowed = 49;

$details = array(
    "Full Name" => $person,
    "City" => $city,
    "Event" => $eventDate
);

echo "User Information:\n";
foreach ($details as $label => $item) {
    echo "$label: $item\n";
}

echo "\nAccess Status: ";
if ($age < 17) {
    echo "Not allowed in. Wait for parents.\n";
} elseif ($age > 50) {
    echo "Please wait in the car.\n";
} else {
    echo "Access granted.\n";
}

echo "\nUser Age: " . $age . "\n";

?>
