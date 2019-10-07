<?php

namespace PPO\Notebook;

use PPO\Notebook\Interfaces\NotebookEntry;

final class Notebook {

	private $entries = [];

	public function save(NotebookEntry $entry): self {
		$this->entries[] = $entry;
		return $this;
	}

	public function countEntries(): int {
		return count($this->entries);
	}

	/**
	 * @return NotebookEntry[]
	 */
	public function getAll(): array {
		return $this->entries;
	}

}
