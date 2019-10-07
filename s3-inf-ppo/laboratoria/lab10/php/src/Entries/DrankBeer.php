<?php

namespace PPO\Notebook\Entries;

use PPO\Notebook\Interfaces\NotebookEntry;
use PPO\Notebook\Traits\Slugger;

class DrankBeer implements NotebookEntry {

	use Slugger;

	private $breweryName;
	private $name;

	public function __construct(string $name, string $breweryName = "") {
		$this->name = $name;
		$this->breweryName = $breweryName;
	}

	protected function getSlugBase(): string {
		return $this->breweryName . " " . $this->name;
	}

}
