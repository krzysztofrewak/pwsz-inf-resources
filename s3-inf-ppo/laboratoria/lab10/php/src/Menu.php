<?php

namespace PPO\Notebook;

use PPO\Notebook\Entries\DrankBeer;
use PPO\Notebook\Entries\WatchedMovie;

final class Menu {

	private $notebook;

	public function __construct(Notebook $notebook) {
		$this->notebook = $notebook;
	}

	public function run(): void {
		$running = true;

		while($running) {
			$this->displayMenu();

			switch(readline("Wybierz opcję: ")) {
				case 1: {
					$this->write();
					$this->write("zanotowano:", true);
					foreach($this->notebook->getAll() as $entry) {
						$this->write($entry->getSlug());
					}
					break;
				}
				case 2: {
					$title = readline("Podaj tytuł filmu: ");
					$movie = new WatchedMovie($title);
					$this->notebook->save($movie);
					break;
				}
				case 3: {
					$name = readline("Podaj nazwę piwa: ");
					$brewery = readline("Podaj nazwę browaru: ");
					$beer = new DrankBeer($name, $brewery);
					$this->notebook->save($beer);
					break;
				}
				case "x": {
					$running = false;
					break;
				}
				default: {
					break;
				}
			}
		}
	}

	private function displayMenu(): void {
		$this->write();
		$this->write("notatek: {$this->notebook->countEntries()}", true);
		$this->write("[1] wypisz notatki");
		$this->write("[2] zanotuj obejrzany film");
		$this->write("[3] zanotuj wypite piwo");
		$this->write("[x] wyjdź");
	}

	private function write(string $line = "", $comment = false): void {
		if($comment) echo "::: ";
		echo $line . PHP_EOL;
	}

}