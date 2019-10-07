<?php

namespace PPO\Zoo\Animals;

class Elephant extends Animal {

	protected function getDiet(): array {
		return ["water", "fruits", "vegetables"];
	}

}
