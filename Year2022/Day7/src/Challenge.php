<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day7\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
        $structure = ['/'=>[]];

        $prevDir = '';
        $curentDirectory = '/';
	    foreach ($this->lines as $line){
            if($line[0] === "$") {
                $commands = explode("",$line);
                if($commands[1] === "cd"){
                    $prevDir = $curentDirectory;
                  $curentDirectory = $structure[$curentDirectory][$commands[2]];
                }

                if($commands[1] === "ls"){

                }
            }
        }
	}
	public function solveSecond(  ) {

	}
}