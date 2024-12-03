<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2024\Day3\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
        $total = 0;
	    foreach($this->lines as $line) {

            preg_match_all('/mul\(\d{1,3},\d{1,3}\)/',$line,$results);

            foreach ($results[0] as $result){
                $result = explode(',',str_replace(array("mul(", ")"), "", $result));
                $total += $result[0] * $result[1];
            }
	    }
        return $total;
	}
	public function solveSecond(  ) {
        $total = 0;
        foreach($this->lines as $line) {
            preg_match_all('/(mul\(\d{1,3},\d{1,3}\))|(don\'t\(\))|(do\(\))/',$line,$results);
            $processing = true;
            foreach ($results[0] as $result){
                if($result === 'don\'t()'){
                   $processing = false;
                   continue;
                }
                if($result === 'do()'){
                    $processing = true;
                    continue;
                }
                if($processing) {
                    $result = explode(',', str_replace(array("mul(", ")"), "", $result));
                    $total += $result[0] * $result[1];
                }
            }
        }
        return $total;
	}
}