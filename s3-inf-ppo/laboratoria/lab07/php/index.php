<?php

require "./vendor/autoload.php";

use ParkingLotManager\Log;
use ParkingLotManager\ParkingLot;
use ParkingLotManager\QueueGenerator;

$queue = QueueGenerator::generate();
$parking = new ParkingLot();

$count = $parking->countCars();
Log::info("There's $count cars in the parking lot.");
Log::info();

foreach($queue as $entity) {
	if($parking->checkIfCanEnter($entity)) {
		$parking->letIn($entity);
	}
}

$count = $parking->countCars();
Log::info();
Log::info("There's $count cars in the parking lot.");
