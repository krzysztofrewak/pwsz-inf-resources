<?php

namespace PPO\Notebook\Traits;

use Cocur\Slugify\Slugify;

trait Slugger {

	public function getSlug(): string {
		$slugify = new Slugify();
		return $slugify->slugify($this->getSlugBase());
	}

	abstract protected function getSlugBase(): string;

}
