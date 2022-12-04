<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day4\src;


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
        $score = 0;
        foreach ($this->lines as $line) {
            $combinations = explode(',', $line);

            $firstSet = explode('-', $combinations[0]);
            $secondSet = explode('-', $combinations[1]);
            if ($firstSet[0] <= $secondSet[0] && $firstSet[1] >= $secondSet[1]) {
                $score++;
                continue;
            }
            if ($secondSet[0] <= $firstSet[0] && $secondSet[1] >= $firstSet[1]) {
                $score++;
            }
        }
        return $score;
    }

    public function solveSecond()
    {
        $score = 0;
        foreach ($this->lines as $line) {
            $combinations = explode(',', $line);

            $firstSet = explode('-', $combinations[0]);
            $secondSet = explode('-', $combinations[1]);
            $arr1 = range($firstSet[0], $firstSet[1]);
            $arr2 = range($secondSet[0], $secondSet[1]);

            $diff = array_intersect($arr1, $arr2);
            if (!empty($diff)) {
                $score++;
            }
        }
        return $score;
    }
}