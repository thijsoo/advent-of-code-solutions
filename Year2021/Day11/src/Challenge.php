<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day11\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase
{


    /**
     * Day1Challenge constructor.
     */
    public function __construct()
    {
        $this->relativePath = dirname(__DIR__);
        parent::__construct();
    }

    public function solveFirst()
    {
        $fc = new FlashCounter($this->lines);
        $c = $fc->stepThroughGrid();
        dd($c);
    }

    public function solveSecond()
    {
        $fc = new FlashCounter($this->lines);
        $c = $fc->stepTillSuperFlash();
        dd($c);
    }
}