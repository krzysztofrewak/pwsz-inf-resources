<?php

namespace PPO\Zoo\Animals;

use PPO\Zoo\Log;

abstract class Animal {

	protected $name;
	protected $hungry = true;

	public function __construct(string $name) {
		$this->name = $name;
	}

	abstract protected function getDiet(): array;

	/**
	 * @param string $food
	 *
	 * @throws \Exception
	 */
	public function feed(string $food): void {
		if(!in_array($food, $this->getDiet())) {
			throw new \Exception("{$this->getName()} doesn't eat {$food}.");
		}

		$this->hungry = false;
		Log::info("{$this->getName()} fed.");
	}

	public function getName(): string {
		return "{$this->getSpecies()} {$this->name}";
	}

	private function getSpecies(): string {
		$namespace = explode("\\", get_class($this));
		return $namespace[count($namespace) - 1];
	}

}
