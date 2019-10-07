<?php

namespace PPO\Dashboard;

use Exception;
use ReflectionClass;
use ReflectionException;

final class Dashboard {

	public function run(): void {
		try {
			while(true) {
				echo PHP_EOL;
				$method = readline("What would you like to do? ");
				$this->findMethod($method);
			}
		} catch(Exception $exception) {
			echo $exception->getMessage();
		}
	}

	/**
	 * @param string $method
	 * @throws Exception
	 */
	private function findMethod(string $method): void {
		try {
			$reflection = new ReflectionClass(get_class($this));
			$reflectedMethod = $reflection->getMethod($method);
			$reflectedMethod->setAccessible(true);
			$reflectedMethod->invoke($this);
		} catch(ReflectionException $e) {
			echo "There's no method like $method." . PHP_EOL;
		}
	}

	/**
	 * @throws Exception
	 */
	private function sing(): void {
		$lyrics = [
			"There must be some kind of way outta here",
			"Said the joker to the thief",
			"There's too much confusion",
			"I can't get no relief",
			"",
			"Business men, they drink my wine",
			"Plowman dig my earth",
			"None were level on the mind",
			"Nobody up at his word",
			"Hey, hey",
			"",
			"No reason to get excited",
			"The thief he kindly spoke",
			"There are many here among us",
			"Who feel that life is but a joke",
			"But, uh, but you and I, we've been through that",
			"And this is not our fate",
			"So let us stop talkin' falsely now",
			"The hour's getting late, hey",
			"",
			"All along the watchtower",
			"Princes kept the view",
			"While all the women came and went",
			"Barefoot servants, too",
			"Outside in the cold distance",
			"A wildcat did growl",
			"Two riders were approaching",
			"And the wind began to howl",
		];

		foreach($lyrics as $line) {
			echo $line . PHP_EOL;
			usleep(500000);
		}
	}

	/**
	 * @throws Exception
	 */
	private function nothing(): void {
		echo "There's some of nothing." . PHP_EOL;
	}

	/**
	 * @throws Exception
	 */
	private function quote(): void {
		echo "> That's one small step for man, one giant leap for mankind." . PHP_EOL;
	}

	/**
	 * @throws Exception
	 */
	private function quit(): void {
		$this->stop();
	}

	/**
	 * @throws Exception
	 */
	private function stop(): void {
		throw new Exception("Dashboard stopped.");
	}

}