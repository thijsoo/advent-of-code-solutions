<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2024\Day1\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
		[ $left, $right ] = $this->getInput();
		sort($left);
		sort($right);
		return array_sum(array_map(function($left,$right) {
			return abs($left - $right);
		},$left,$right));
	}
	public function solveSecond(  ) {
        [ $left, $right ] = $this->getInput();
        sort($left);

        $counted = [];
        foreach ($right as $value) {
            if(isset($counted[$value])) {
                ++$counted[$value];
            }else{
                $counted[$value] = 1;
            }
        }

        $total = 0;
        foreach ($left as $value) {
            if(isset($counted[$value])) {
                $total += $value * $counted[$value];
            }
        }
        return $total;
	}/**
 * @return array[]
 */
	public function getInput(): array {
		$left  = [];
		$right = [];
		foreach ( $this->lines as $line ) {
			$options = explode( "   ", $line );
			$left[]  = $options[0];
			$right[] = $options[1];
		}

		return [ $left, $right ];
	}
}
