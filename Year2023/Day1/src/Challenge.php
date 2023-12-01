<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2023\Day1\src;


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
        $listOfNumbers = [];
        foreach ($this->lines as $line) {
            $listOfNum = [];
            $line = str_split($line);
            foreach ($line as $letter) {
                if (is_numeric($letter)) {
                    $listOfNum[] = $letter;
                }
            }
            $bla = $listOfNum[0].$listOfNum[count($listOfNum) - 1];
            $listOfNumbers[] = $bla;
        }
        return array_sum($listOfNumbers);

    }

    public function solveSecond()
    {
        $listOfNumbers = [];
        foreach ($this->lines as $line) {
            $line = '54oneights';
            $listOfNum = [];
            $line = str_split($line);
            foreach ($line as $key => $letter) {
                if (is_numeric($letter)) {
                    $listOfNum[] = $letter;
                }
                $letterNum = $this->detectNumber($line, $key);

                if ($letterNum) {
                    $listOfNum[] = $letterNum;
                }
            }
            $bla = $listOfNum[0].$listOfNum[count($listOfNum) - 1];

            $listOfNumbers[] = $bla;
        }
        return array_sum($listOfNumbers);
    }

    private function detectNumber($line, $key)
    {
        if ($line[$key] === 'o') {
            if (isset($line[$key + 2])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2];
                if ($completeStr === 'one') {
                    return 1;
                }
            }
        }
        if ($line[$key] === 't') {
            if (isset($line[$key + 2])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2];
                if ($completeStr === 'two') {
                    return 2;
                }
            }
            if (isset($line[$key + 4])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2].$line[$key + 3].$line[$key + 4];
                if ($completeStr === 'three') {
                    return 3;
                }
            }
        }
        if ($line[$key] === 'f') {
            if (isset($line[$key + 3])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2].$line[$key + 3];
                if ($completeStr === 'four') {
                    return 4;
                }

                if ($completeStr === 'five') {
                    return 5;
                }
            }
        }
        if ($line[$key] === 's') {
            if (isset($line[$key + 2])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2];
                if ($completeStr === 'six') {
                    return 6;
                }
            }
            if (isset($line[$key + 4])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2].$line[$key + 3].$line[$key + 4];
                if ($completeStr === 'seven') {
                    return 7;
                }
            }
        }

        if ($line[$key] === 'e') {
            if (isset($line[$key + 4])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2].$line[$key + 3].$line[$key + 4];
                if ($completeStr === 'eight') {
                    return 8;
                }
            }
        }
        if ($line[$key] === 'n') {
            if (isset($line[$key + 3])) {
                $completeStr = $line[$key].$line[$key + 1].$line[$key + 2].$line[$key + 3];
                if ($completeStr === 'nine') {
                    return 9;
                }
            }
        }
    }
}