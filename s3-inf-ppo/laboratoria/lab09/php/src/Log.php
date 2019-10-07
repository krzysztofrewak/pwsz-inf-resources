<?php

namespace PPO\Zoo;

final class Log {

	public static function info(string $message = ""): void {
		echo $message . PHP_EOL;
	}

	public static function warning(string $message = ""): void {
		echo "[!] " . $message . PHP_EOL;
	}
	
}
