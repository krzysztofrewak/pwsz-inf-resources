<?php

class WinnerWasCalled extends Exception {}

class Log {

	static function info(string $message = ""): void {
		echo $message . PHP_EOL;
	}

}

class Dice {

	function roll(): int {
		$result = rand(1, 6);
		Log::info("Dice roll: " . $result);
		return $result;
	}

}

class Pawn {

	public $position;
	public $name;

	function __construct(string $name) {
		$this->position = 0;
		$this->name = $name;
		
		Log::info("$name joined the game.");
	}

}

class Board {

	const MAX_POSITION = 100;

	public $pawns;
	public $dice;
	public $winner;
	public $turnsCounter;

	function __construct() {
		$this->pawns = [];
		$this->dice = null;
		$this->winner = null;
		$this->turnsCounter = 0;
	}

	function performTurn(): void {
		$this->turnsCounter++;
		Log::info();
		Log::info("Turn " . $this->turnsCounter);

		foreach($this->pawns as $pawn) {
			$rollResult = $this->dice->roll();
			$pawn->position += $rollResult;
			Log::info($pawn->name . " new position: " . $pawn->position);

			if($pawn->position >= self::MAX_POSITION) {
				$this->winner = $pawn;
				throw new WinnerWasCalled();
			}
		}
	}

}

$board = new Board();	
$board->dice = new Dice();
$board->pawns[] = new Pawn("Luke Skywalker");
$board->pawns[] = new Pawn("Darth Vader");

try {
	while(true) {
		$board->performTurn();
	}
} catch(WinnerWasCalled $exception) {
	Log::info();
	Log::info($board->winner->name . " won.");
}
