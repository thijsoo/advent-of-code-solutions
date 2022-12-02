<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2019\Day2\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {
    private $noun;
    private $verb;
    private $done;
    private $basic;
	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
        $this->lines = explode(',',$this->lines[0]);
        $this->lines[1] = 12;
        $this->lines[2] = 2;
        $max = count($this->lines);
        for($i = 0; $i !== $max; $i+=4){
            switch($this->lines[$i]){
                case 1:
                    $spot1 = $this->lines[$i+1];
                    $v1 = $this->lines[$spot1];
                    $spot2 = $this->lines[$i+2];
                    $v2 = $this->lines[$spot2];
                    $sum = $v1+$v2;
                    $this->lines[$this->lines[$i+3]] = $sum;
                    break;
                case 2:
                    $spot1 = $this->lines[$i+1];
                    $v1 = $this->lines[$spot1];
                    $spot2 = $this->lines[$i+2];
                    $v2 = $this->lines[$spot2];
                    $sum = $v1*$v2;
                    $this->lines[$this->lines[$i+3]] = $sum;
                    break;
                case 99:

                    return $this->lines[0];
                    break;
                default:
                    dd($i,$this->lines[$i]);
                    die('iets ging fout');
            }
        }
	}
	public function solveSecond(  ) {
        $this->lines = explode(',',$this->lines[0]);

        $this->basic = $this->lines;

        for ($input0 = 0; $input0 < 99; $input0++) {
            for ($input1 = 0; $input1 < 99; $input1++) {
                $this->lines[1] = $input0;
                $this->lines[2] = $input1;
                $this->run();

                if($this->done){
                    echo 'hier';
                    die;
                }
            }
            $this->lines = $this->basic;
        }

        return 'klaar';
	}

    private function run(){
        $max = count($this->lines);
        for($i = 0; $i !== $max; $i+=4){
            switch($this->lines[$i]){
                case 1:
                    $spot1 = $this->lines[$i+1];
                    $v1 = $this->lines[$spot1];
                    $spot2 = $this->lines[$i+2];
                    $v2 = $this->lines[$spot2];
                    $sum = $v1+$v2;
                    $this->lines[$this->lines[$i+3]] = $sum;
                    break;
                case 2:
                    $spot1 = $this->lines[$i+1];
                    $v1 = $this->lines[$spot1];
                    $spot2 = $this->lines[$i+2];
                    $v2 = $this->lines[$spot2];
                    $sum = $v1*$v2;
                    $this->lines[$this->lines[$i+3]] = $sum;
                    break;
                case 99:
                    return $this->lines[0];
                    break;
                default:
                    dump($i,$this->lines[$i]);
                  //  die('iets ging fout');
            }
        }
    }
}