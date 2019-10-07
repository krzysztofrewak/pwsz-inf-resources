<?php

namespace ParkingLotManager;

use ParkingLotManager\Entities\Car;
use ParkingLotManager\Interfaces\EntityInterface;

final class ParkingLot {

	protected $entitiesOnProperty = [];
	protected $carsOnProperty = 0;

	public function checkIfCanEnter(EntityInterface $entity): bool {
		return $entity->canEnter();
	}

	public function letIn(EntityInterface $entity): void {
		$this->entitiesOnProperty[] = $entity;
		Log::info($entity->identify() . " let in.");

		if($entity instanceof Car) {
			$this->carsOnProperty++;
		}
	}

	public function countCars(): int {
		return $this->carsOnProperty;
	}
	
}
