<?php

namespace ParkingLotManager;

final class Log {

	public static function info(string $message = ""): void {
		echo $message .  PHP_EOL;
	}
	
}
