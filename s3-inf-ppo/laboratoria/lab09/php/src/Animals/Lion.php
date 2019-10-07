<?php

namespace PPO\Zoo\Animals;

class Lion extends Animal {

	protected function getDiet(): array {
		return ["water", "meat", "milk"];
	}

}
