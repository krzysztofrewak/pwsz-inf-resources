<?php

namespace PPO\Notebook\Entries;

use PPO\Notebook\Interfaces\NotebookEntry;
use PPO\Notebook\Traits\Slugger;

class WatchedMovie implements NotebookEntry {

	use Slugger;

	private $title;

	public function __construct(string $title) {
		$this->title = $title;
	}

	protected function getSlugBase(): string {
		return $this->title;
	}

}
