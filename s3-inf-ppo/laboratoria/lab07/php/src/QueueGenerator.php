<?php

namespace ParkingLotManager;

use ParkingLotManager\Entities\Car;
use ParkingLotManager\Entities\Bicycle;
use ParkingLotManager\Entities\Pedestrian;
use ParkingLotManager\Entities\TeacherCar;

final class QueueGenerator {

	const ANONYMOUS_PEDESTRIANS_COUNT = 50;
	const PEDESTRIANS_COUNT = 5;
	const CARS_COUNT = 30;
	const TEACHER_CARS_COUNT = 7;
	const BICYCLES_COUNT = 3;

	public static function generate(): array {
		$queue = [];

		for($i = 0; $i <= self::ANONYMOUS_PEDESTRIANS_COUNT; $i++) {
			$queue[] = new Pedestrian();
		}

		for($i = 0; $i <= self::PEDESTRIANS_COUNT; $i++) {
			$queue[] = new Pedestrian(self::getRandomName());
		}

		for($i = 0; $i <= self::CARS_COUNT; $i++) {
			$queue[] = new Car(self::getRandomPlateNumber());
		}

		for($i = 0; $i <= self::TEACHER_CARS_COUNT; $i++) {
			$queue[] = new TeacherCar(self::getRandomPlateNumber());
		}

		for($i = 0; $i <= self::BICYCLES_COUNT; $i++) {
			$queue[] = new Bicycle();
		}

		shuffle($queue);
		return $queue;
	}

	private static function getRandomPlateNumber(): string {
		return "DLX " . random_int(10000, 99999);
	}

	private static function getRandomName(): string {
		$names = ["John", "Jack", "James", "George", "Joe", "Jim"];
		return $names[array_rand($names)];
	}

}
