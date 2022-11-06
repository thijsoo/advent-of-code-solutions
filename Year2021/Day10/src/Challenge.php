<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day10\src;


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
		$syntaxChecker = new SyntaxChecker($this->lines);
		dd($syntaxChecker->getSyntaxScore());
	}
	public function solveSecond(  ) {
		$syntaxChecker = new SyntaxChecker($this->lines);
		dd($syntaxChecker->getCompletedScore());
	}
}