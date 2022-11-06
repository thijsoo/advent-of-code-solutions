<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day12\src;


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
		$g = new Graph($this->lines);
        dd($g->findTotalPaths());
	}
	public function solveSecond(  ) {
		dump('wowsecond');
	}
}