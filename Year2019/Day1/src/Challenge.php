<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2019\Day1\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase
{

    public function __construct()
    {
        $this->relativePath = dirname(__DIR__);
        parent::__construct();
    }

    public function solveFirst()
    {
        $total = 0;

        foreach ($this->lines as $line) {
            $total += floor($line / 3) - 2;
        }
        return $total;
    }

    public function solveSecond()
    {
        $total = 0;
        foreach ($this->lines as $line) {
            $cur = $line;
            $subTotal = 0;
            while($cur > 0){
                $cur = floor($cur / 3) - 2;
                if($cur > 0) {
                    $subTotal += $cur;
                }
            }
            $total += $subTotal;
        }
        return $total;
    }
}