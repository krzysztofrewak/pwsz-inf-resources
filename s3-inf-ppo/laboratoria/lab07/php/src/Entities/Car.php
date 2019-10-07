<?php

namespace ParkingLotManager\Entities;

use ParkingLotManager\Interfaces\EntityInterface;

class Car implements EntityInterface {

	protected $plate;

	public function __construct(string $plate) {
		$this->plate = $plate;
	}

	public function identify(): string {
		return "Car with plate number " . $this->plate;
	}

	public function canEnter(): bool {
		return true;
	}
	
}
