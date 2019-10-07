<?php

namespace ParkingLotManager\Interfaces;

interface EntityInterface {

	public function identify(): string;
	public function canEnter(): bool;

}
