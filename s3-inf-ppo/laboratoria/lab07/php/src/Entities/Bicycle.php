<?php

namespace ParkingLotManager\Entities;

use ParkingLotManager\Interfaces\EntityInterface;

class Bicycle implements EntityInterface {

	public function identify(): string {
		return "Unknown bicycle";
	}

	public function canEnter(): bool {
		return false;
	}
	
}
