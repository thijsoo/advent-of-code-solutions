<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2023\Day2\src;


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

        $idList = [];

        foreach ($this->lines as $line) {
            $gameAndSets = explode(":", $line);
            $id = str_replace("Game ", "", $gameAndSets[0]);

            $sets = explode(";", $gameAndSets[1]);


            $completeSetAllowed = [];
            foreach ($sets as $set) {
                $cubeSet = explode(",", $set);
                $allowedSets = [];
                foreach ($cubeSet as $colorSet) {
                    $colorSet = trim($colorSet);
                    $numAndColor = explode(" ", $colorSet);
                    if($this->isAllowedSet($numAndColor)) {
                      //  dump($numAndColor);
                        $allowedSets[] = 1;
                    }
                }
                if(count($allowedSets) === count($cubeSet) ){
                    $completeSetAllowed[] = 1;
                }
            }
            if(count($completeSetAllowed) ===count($sets) ){
                $idList[$id] = $id;
            }
        }
        return array_sum($idList);
    }

    private function isAllowedSet($numAndColor){
        $redAllowed = 12;
        $greenAllowed = 13;
        $blueAllowed = 14;

       // dump($numAndColor);
        switch ($numAndColor[1]) {
            case "green":
                if ($numAndColor[0] > $greenAllowed) {
                    return false;
                }
                break;
            case "red":
                if ($numAndColor[0] > $redAllowed) {
                    return false;
                }
                break;
            case "blue":
                if ($numAndColor[0] > $blueAllowed) {
                    return false;
                }
                break;
        }
        return true;
    }

    public function solveSecond()
    {

$t= 0;
        foreach ($this->lines as $line) {
            $gameAndSets = explode(":", $line);
            $sets = explode(";", $gameAndSets[1]);

            $colorList = [];
            $colorList['red'] = 0;
            $colorList['green'] = 0;
            $colorList['blue'] = 0;
            foreach ($sets as $set) {

                $cubeSet = explode(",", $set);
                foreach ($cubeSet as $colorSet) {
                    $colorSet = trim($colorSet);
                    $numAndColor = explode(" ", $colorSet);

                    if($colorList[$numAndColor[1]] < $numAndColor[0]){
                        $colorList[$numAndColor[1]] = $numAndColor[0];
                    }

                }

            }
            $num = 1;
            foreach ($colorList as $c){
                $num *= $c;
            }

            $t+=$num;

        }
        return $t;

    }
}