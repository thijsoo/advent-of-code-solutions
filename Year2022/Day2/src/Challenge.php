<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day2\src;


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
            $moves = explode(' ', $line);

            switch ($moves[0]) {
                case "A":
                    switch ($moves[1]) {
                        case "X";
                            $score += 1;
                            $score += 3;
                            break;
                        case "Y";
                            $score += 2;
                            $score += 6;
                            break;
                        case "Z";
                            $score += 3;
                            break;
                    }
                    break;
                case "B":
                    switch ($moves[1]) {
                        case "X";
                            $score += 1;
                            break;
                        case "Y";
                            $score += 2;
                            $score += 3;
                            break;
                        case "Z";
                            $score += 3;
                            $score += 6;
                            break;
                    }
                    break;
                case "C":
                    switch ($moves[1]) {
                        case "X";
                            $score += 1;
                            $score += 6;
                            break;
                        case "Y";
                            $score += 2;

                            break;
                        case "Z";
                            $score += 3;
                            $score += 3;
                            break;
                    }
                    break;
            }


        }
        return $score;
    }

    public function solveSecond()
    {
        $score = 0;
        foreach ($this->lines as $line) {
            $moves = explode(' ', $line);

            switch ($moves[0]) {
                case "A": //Rock 1
                    switch ($moves[1]) {
                        case "X"; //Lose
                            $score += 3;

                            break;
                        case "Y";//Draw
                            $score += 1;
                            $score += 3;
                            break;
                        case "Z";//Win
                            $score += 2;
                            $score += 6;
                            break;
                    }
                    break;
                case "B": //Paper 2
                    switch ($moves[1]) {
                        case "X";
                            $score += 1;
                            break;
                        case "Y";
                            $score += 2;
                            $score += 3;
                            break;
                        case "Z";
                            $score += 3;
                            $score += 6;

                            break;
                    }
                    break;
                case "C"://Scissor 3
                    switch ($moves[1]) {
                        case "X";
                            $score += 2;
                            break;
                        case "Y";
                            $score += 3;
                            $score += 3;
                            break;
                        case "Z";
                            $score += 1;

                            $score += 6;
                            break;
                    }
                    break;
            }


        }
        return $score;
    }


}