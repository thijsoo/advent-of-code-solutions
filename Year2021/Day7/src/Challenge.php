<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day7\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {


	/**
	 * Day1Challenge constructor.
	 */
	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst() {
		$crabAligner = new CrabHorizonalAligner(explode(',',$this->lines[0]));
		$fuel = $crabAligner->calculateFuelCost($crabAligner->calculateOptimalPosition());

		dd($fuel);
	}

	public function solveSecond() {
		$crabAligner = new CrabExpoAligner(explode(',',$this->lines[0]));
		$fuel = $crabAligner->calculateFuel();

		dd($fuel);

	}
}