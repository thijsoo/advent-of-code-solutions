<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day9\src;


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
		$riskcal = new RiskCalculator($this->lines);
		$c = $riskcal->calcRisk();
		dd($c);
	}
	public function solveSecond(  ) {
		$riskcal = new RiskCalculator($this->lines);
		$calc = $riskcal->calc($riskcal->getAllCompleteBasins());
dd($calc);
	}
}