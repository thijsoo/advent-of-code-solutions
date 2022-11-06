<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day8\src;


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
		$c = new CollectionCounter($this->lines);
		dd($c->countUniqueInstances());
	}
	public function solveSecond(  ) {
		$c = 0;
		foreach ($this->lines as $line) {
			$decoder = new Decoder( $line );
			$decoder->createWiringMatrix();
			$c += $decoder->decodeAndCount();
		}


		dd($c);
	}
}