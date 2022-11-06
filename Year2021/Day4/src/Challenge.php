<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day4\src;


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
		$input = $this->lines[0];
		unset( $this->lines[0], $this->lines[1] );

		$bingoSolver = new BingoSolver($input,$this->lines);

		dd($bingoSolver->solve());
	}
	public function solveSecond(  ) {

			$input = $this->lines[0];
			unset( $this->lines[0], $this->lines[1] );

			$bingoSolver = new BingoSolver($input,$this->lines);

			dd($bingoSolver->solve2());

	}
}