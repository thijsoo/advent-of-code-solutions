<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day8\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
	    foreach($this->lines as $line) {
	        dd($line);
	    }
	}
	public function solveSecond(  ) {

	}
}