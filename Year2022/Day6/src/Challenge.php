<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day6\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
	    $charList = str_split($this->lines[0]);

		$start= 0;
		$end = 3;
		while(count($charList) > $end){
		$result = array_unique(	[$charList[$start],$charList[$start+1],$charList[$start+2],$charList[$end]]);
		if(count($result) == 4){
			return $end+1;
		}

			$start++;
			$end++;
		}
	}
	public function solveSecond(  ) {
		$charList = str_split($this->lines[0]);

		$start= 0;
		$end = 13;
		while(count($charList) > $end){
			$result = [];

			for($i = $start; $i<$end+1; $i++){
				$result[]=$charList[$i];
			}
			$result = array_unique(	$result);
			if(count($result) == 14){

				return $end+1;
			}

			$start++;
			$end++;
		}
	}
}
