<?php

namespace ParkingLotManager\Entities;

use ParkingLotManager\Interfaces\EntityInterface;

class Pedestrian implements EntityInterface {

	protected $name;

	public function __construct(string $name = "") {
		$this->name = $name;
	}

	public function identify(): string {
		return $this->name ?: "Unknown pedestrian";
	}

	public function canEnter(): bool {
		return true;
	}
	
}
