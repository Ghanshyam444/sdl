<?php

// Base class
class Locker {
    protected $lockerId;
    protected $size;

    public function __construct($lockerId, $size) {
        $this->lockerId = $lockerId;
        $this->size = $size;
    }

    public function displayInfo() {
        echo "Locker ID: " . $this->lockerId . "<br>";
        echo "Size: " . $this->size . "<br>";
    }
}

// Subclass representing fixed size lockers
class FixedLocker extends Locker {
    private $fixedPrice;

    public function __construct($lockerId, $size, $fixedPrice) {
        parent::__construct($lockerId, $size);
        $this->fixedPrice = $fixedPrice;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Fixed Price: $" . $this->fixedPrice . "<br>";
    }
}

// Subclass representing variable size lockers
class VariableLocker extends Locker {
    private $hourlyRate;

    public function __construct($lockerId, $size, $hourlyRate) {
        parent::__construct($lockerId, $size);
        $this->hourlyRate = $hourlyRate;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Hourly Rate: $" . $this->hourlyRate . "<br>";
    }
}

// Example usage
$fixedLocker = new FixedLocker("FL001", "Small", 50);
$variableLocker = new VariableLocker("VL001", "Medium", 2);

echo "<h2>Fixed Locker Information</h2>";
$fixedLocker->displayInfo();

echo "<h2>Variable Locker Information</h2>";
$variableLocker->displayInfo();

?>
