<?php

namespace PPO\Zoo;

use Exception;
use PPO\Zoo\Animals\Animal;

final class Zoo {

	/** @var Animal[] $animals  */
	private $animals = [];
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
		Log::info("$name created.");
	}

	public function addAnimal(Animal $animal): self {
		$this->animals[] = $animal;
		Log::info("{$animal->getName()} added to zoo.");
		return $this;
	}

	public function feedAnimals(string $food): void {
		Log::info();
		Log::info("Feeding started.");
		foreach($this->animals as $animal) {
			try {
				$animal->feed($food);
			} catch(Exception $e) {
				Log::warning($e->getMessage());
			}
		}
	}

}
