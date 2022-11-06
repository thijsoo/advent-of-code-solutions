<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day5\src;

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
		$generator = new HydroHorizonalVerticalPathGenerator($this->lines);
		$map = $generator->generatePath();
		dd($map->getAmountOfMultiples());
	}
	public function solveSecond(  ) {
		$generator = new HydroHorizonalVerticalDiagonalPathGenerator();
		$generator->setInput($this->lines);
		$map = $generator->generatePath();
		dd($map->getAmountOfMultiples());
	}
}