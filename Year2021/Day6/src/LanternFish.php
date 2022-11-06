<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day6\src;

class LanternFish {

	private $daysLeft;

	/**
	 * @param $daysLeft
	 */
	public function __construct( $daysLeft ) {
		$this->daysLeft = $daysLeft;
	}

	public function live(  ) {
		$this->daysLeft--;
	}

	public function respawn(  ) {
		$this->daysLeft = 6;
	}

	public function shouldSpawnNew(  ): bool {
		return ($this->daysLeft === -1);
	}

}