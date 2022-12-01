<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day1\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
		$sortedByKey = [];
		$elfnum = 1;
		$highElf = ['elf'=>0,'value'=>0];
	    foreach ($this->lines as $line){
			if($line == ''){
				$elfnum++;
			}
			$sortedByKey[$elfnum][] = $line;
		}


		foreach ($sortedByKey as $elf => $values){
			if(array_sum($values) > $highElf['value']){
				$highElf['elf'] = $elf;
				$highElf['value'] = array_sum($values);
			}
		}

		return $highElf['value'];
	}
	public function solveSecond(  ) {
		$sortedByKey = [];
		$elfnum = 1;
		$numList = [];
		foreach ($this->lines as $line){
			if($line == ''){
				$elfnum++;
			}
			$sortedByKey[$elfnum][] = $line;
		}
		foreach ($sortedByKey as $elf => $values){
			array_push($numList, array_sum($values));
		}
		rsort($numList);

		return array_sum([$numList[0],$numList[1],$numList[2]]);
	}
}
