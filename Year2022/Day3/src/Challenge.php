<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day3\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase
{

    private $valueMap = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'o' => 15,
        'p' => 16,
        'q' => 17,
        'r' => 18,
        's' => 19,
        't' => 20,
        'u' => 21,
        'v' => 22,
        'w' => 23,
        'x' => 24,
        'y' => 25,
        'z' => 26,
        'A' => 27,
        'B' => 28,
        'C' => 29,
        'D' => 30,
        'E' => 31,
        'F' => 32,
        'G' => 33,
        'H' => 34,
        'I' => 35,
        'J' => 36,
        'K' => 37,
        'L' => 38,
        'M' => 39,
        'N' => 40,
        'O' => 41,
        'P' => 42,
        'Q' => 43,
        'R' => 44,
        'S' => 45,
        'T' => 46,
        'U' => 47,
        'V' => 48,
        'W' => 49,
        'X' => 50,
        'Y' => 51,
        'Z' => 52,
    ];

    public function __construct()
    {
        $this->relativePath = dirname(__DIR__);
        parent::__construct();
    }

    public function solveFirst()
    {
        $score = 0;
        foreach ($this->lines as $line) {
            $sentence = str_split($line);
            $firsthalf = array_slice($sentence, 0, count($sentence) / 2);
            $secondhalf = array_slice($sentence, count($sentence) / 2);

            $intersect = array_intersect($firsthalf, $secondhalf);
            sort($intersect);
            dump($intersect);
            $score += $this->valueMap[$intersect[0]];

        }
        return $score;
    }

    public function solveSecond()
    {
        $score = 0;
        $elveRugsacks = [];
        $c = 0;
        $cur = 0;
        foreach ($this->lines as $line) {
            $elveRugsacks[$c][] = $line;
            $cur++;
            if ($cur == 3) {
                $cur = 0;
                $c++;
            }
        }

        foreach ($elveRugsacks as $rugsack) {
            foreach (str_split($rugsack[0]) as $singleChar) {
                if (str_contains($rugsack[1], $singleChar) && str_contains($rugsack[2], $singleChar)) {
                    $score += $this->valueMap[$singleChar];
                    break;
                }
            }
        }

        return $score;
    }
}