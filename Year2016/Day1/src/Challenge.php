<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2016\Day1\src;


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
        $compass = ['N', 'E', 'S', 'W'];

        $x = 0;
        $y = 0;
        $steps = explode(', ', $this->lines[0]);
        $coordinates = [];

        foreach ($steps as $step) {
            $distance = substr($step, 1);

            if ($step[0] == 'L') {
                $direction = (current($compass) == 'N' ? end($compass) : prev($compass));
            } else {
                $direction = (current($compass) == 'W' ? reset($compass) : next($compass));
            }

            for ($i = 1; $i <= $distance; $i++) {
                if ($direction === 'N') {
                    $y++;
                }
                if ($direction === 'E') {
                    $x++;
                }
                if ($direction === 'S') {
                    $y--;
                }
                if ($direction === 'W') {
                    $x--;
                }
                $coordinates[] = ['x' => $x, 'y' => $y];
            }
        }

        return [
            'destinationDistance' => abs($x) + abs($y),
            'dejaVuDistance' => $this->getFirstDuplicateDistance($coordinates),
        ];
    }

    public function solveSecond()
    {

    }

    /**
     * @param array $coordinates
     * @return integer|null
     */
    private function getFirstDuplicateDistance($coordinates)
    {
        $duplicates = [];
        $arrayHashes = [];

        foreach ($coordinates as $key => $coordinate) {
            $hash = md5(serialize($coordinate));
            (!isset($arrayHashes[$hash]) ?: $duplicates[] = $coordinate);
            $arrayHashes[$hash] = $hash;
        }

        return (!empty($duplicates) ? abs($duplicates[0]['x']) + abs($duplicates[0]['y']) : null);
    }
}