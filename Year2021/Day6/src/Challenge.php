<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day6\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {


	/**
	 * Day1Challenge constructor.
	 */
	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
		$spawner = new LanternFishSpawner($this->lines[0]);
		$fish = $spawner->countFish();
		dd($fish);
	}
	public function solveSecond(  ) {
		dump('wowsecond');
	}
}