<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2016\Day2\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {

        $grid = [
            [1,2,3],[4,5,6],[7,8,9]
        ];
	   foreach ($this->lines as $instructions){
           $iMax = strlen($instructions);
           for($i=0;  $i< $iMax; $i++){

           }
       }


       return 1;
	}
	public function solveSecond(  ) {

	}
}