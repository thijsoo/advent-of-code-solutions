<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2024\Day2\src;


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
            $options = explode(" ", $line);

            $safe = $this->runLine($options);

            if ($safe) {
                $total++;
            }
        }
        return $total;
    }

    public function solveSecond()
    {
        $total = 0;
        foreach ($this->lines as $line) {
            $options = explode(" ", $line);

            $optionList = [];
            $i = 0;
            foreach ($options as $key => $value){
                $optionList[$i] = $options;
                unset($optionList[$i][$key]);
                $i++;
            }

            $optionList = array_map('array_values', $optionList);

            foreach ($optionList as $options) {
                $safe = $this->runLine($options);
                if ($safe) {
                    $total++;
                    break;
                }
            }
        }

        return $total;

    }

    public function runLine($options)
    {
        $prev = null;
        $goingUp = false;
        $safe = false;
        foreach ($options as $key => $value) {
            if ($prev === null) {
                $prev = $value;
                if ($options[$key + 1] > $value) {
                    $goingUp = true;
                }
                continue;
            }
            if ($key !== 1 && $value === $prev) {
                $safe = false;
                break;
            }
            if ($goingUp) {
                if ($value > $prev && abs($value - $prev) <= 3) {
                    $safe = true;
                } else {
                    $safe = false;
                    break;
                }
            } else {

                if ($value < $prev && abs($value - $prev) <= 3) {
                    $safe = true;
                } else {
                    $safe = false;
                    break;
                }
            }

            $prev = $value;
        }

        return $safe;
    }
}