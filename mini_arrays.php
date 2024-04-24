<?php

// Numerical Array example
$lockerIds = array("L001", "L002", "L003");
$sizes = array("Small", "Medium", "Large");

echo "<h2>Numerical Array Example</h2>";
foreach ($lockerIds as $key => $lockerId) {
    echo "Locker ID: " . $lockerId . ", Size: " . $sizes[$key] . "<br>";
}

// Associative Array example
$lockerInfo = array(
    "L001" => array("size" => "Small", "type" => "Fixed", "price" => 50),
    "L002" => array("size" => "Medium", "type" => "Variable", "price" => 2),
    "L003" => array("size" => "Large", "type" => "Fixed", "price" => 100)
);

echo "<h2>Associative Array Example</h2>";
foreach ($lockerInfo as $lockerId => $info) {
    echo "Locker ID: " . $lockerId . ", Size: " . $info["size"] . ", Type: " . $info["type"] . ", Price: $" . $info["price"] . "<br>";
}

// Multi-dimensional Array example
$lockers = array(
    array("L001", "Small", "Fixed", 50),
    array("L002", "Medium", "Variable", 2),
    array("L003", "Large", "Fixed", 100)
);

echo "<h2>Multi-dimensional Array Example</h2>";
foreach ($lockers as $locker) {
    echo "Locker ID: " . $locker[0] . ", Size: " . $locker[1] . ", Type: " . $locker[2] . ", Price: $" . $locker[3] . "<br>";
}

?>
