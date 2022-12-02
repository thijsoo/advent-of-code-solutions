<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2019\Day3\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
	    //dd($this->lines);
        $grid = [[]];
        dd($grid);
	}
	public function solveSecond(  ) {

	}

    private function calcDistance(){
        $dist = abs($h1 - $h2) + abs($w1 - $w2);
    }
}