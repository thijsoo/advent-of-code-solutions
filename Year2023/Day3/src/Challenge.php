<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2023\Day3\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase
{

    private $rowFound = -1;
    private $columnFound = -1;

    public function __construct()
    {
        $this->relativePath = dirname(__DIR__);
        parent::__construct();
    }

    public function solveFirst()
    {
        $numList = [];
        $schematicArray = [];

        foreach ($this->lines as $line) {
            $lineTokens = str_split($line);
            $schematicArray[] = $lineTokens;
        }
        foreach ($schematicArray as $rowNumber => $schematicLine) {
            foreach ($schematicLine as $columnNumber => $schematicToken) {

                if (is_numeric($schematicToken)) {
                    $shouldAddNumber = $this->shouldAddNumber($schematicLine, $columnNumber, $schematicArray, $rowNumber);
                    if ($shouldAddNumber && $this->rowFound !== $rowNumber && $this->columnFound !== $columnNumber) {
                        $this->rowFound = $rowNumber;
                        $this->columnFound = $columnNumber;

                        $numberList = [];
                        for ($i = $columnNumber; $i !== -1; $i--) {
                            if (!is_numeric($schematicLine[$i])) {
                                break;
                            }
                            if (is_numeric($schematicLine[$i])) {
                                $numberList[] = $schematicLine[$i];
                            }
                        }
                        $numberList = array_reverse($numberList);
                        for ($i = $columnNumber + 1; $i !== count($schematicLine); $i++) {
                            if (!is_numeric($schematicLine[$i])) {
                                break;
                            }
                            if (is_numeric($schematicLine[$i])) {
                                $numberList[] = $schematicLine[$i];
                            }
                        }
                        $numList[] = implode("", $numberList);
                    }
                } else {

                    $this->rowFound = -1;
                    $this->columnFound = -1;
                }

            }

        }

        return array_sum($numList);
    }


    public function solveSecond()
    {
        $gearList = [];
        $schematicArray = [];

        foreach ($this->lines as $line) {
            $lineTokens = str_split($line);
            $schematicArray[] = $lineTokens;
        }
        foreach ($schematicArray as $rowNumber => $schematicLine) {
            foreach ($schematicLine as $columnNumber => $schematicToken) {

                if (is_numeric($schematicToken)) {
                    $gearData = $this->shouldAddGear($schematicLine, $columnNumber, $schematicArray, $rowNumber);
                    if ($gearData['shouldSet'] && $this->rowFound !== $rowNumber && $this->columnFound !== $columnNumber) {
                        $this->rowFound = $rowNumber;
                        $this->columnFound = $columnNumber;

                        $numberList = [];
                        for ($i = $columnNumber; $i !== -1; $i--) {
                            if (!is_numeric($schematicLine[$i])) {
                                break;
                            }
                            if (is_numeric($schematicLine[$i])) {
                                $numberList[] = $schematicLine[$i];
                            }
                        }
                        $numberList = array_reverse($numberList);
                        for ($i = $columnNumber + 1; $i !== count($schematicLine); $i++) {
                            if (!is_numeric($schematicLine[$i])) {
                                break;
                            }
                            if (is_numeric($schematicLine[$i])) {
                                $numberList[] = $schematicLine[$i];
                            }
                        }
                        if (isset($gearList[$gearData['row']]) && is_array($gearList[$gearData['row']])) {
                            $gearList[$gearData['row']][$gearData['column']][] = implode("", $numberList);
                        } else {
                            $gearList[$gearData['row']] = [];
                            $gearList[$gearData['row']][$gearData['column']][] = implode("", $numberList);
                        }
                    }
                } else {

                    $this->rowFound = -1;
                    $this->columnFound = -1;
                }

            }

        }

        $sum = 0;
        foreach ($gearList as $row){
            foreach ($row as $column) {
                if(count($column) == 2){
                    $sum+= $column[0] * $column[1];
                }
            }

        }
        return $sum;
    }

    /**
     * @param  mixed  $schematicLine
     * @param  int|string  $columnNumber
     * @param  array  $schematicArray
     * @param  int  $rowNumber
     * @return mixed
     */
    public function shouldAddNumber(
        mixed $schematicLine,
        int|string $columnNumber,
        array $schematicArray,
        int $rowNumber
    ): mixed {
        $shouldAddNumber = false;
        if (isset($schematicLine[$columnNumber - 1])) {
            if (!is_numeric($schematicLine[$columnNumber - 1]) && $schematicLine[$columnNumber - 1] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicLine[$columnNumber + 1])) {
            if (!is_numeric($schematicLine[$columnNumber + 1]) && $schematicLine[$columnNumber + 1] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicArray[$rowNumber - 1][$columnNumber])) {
            if (!is_numeric($schematicArray[$rowNumber - 1][$columnNumber]) && $schematicArray[$rowNumber - 1][$columnNumber] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicArray[$rowNumber - 1][$columnNumber - 1])) {
            if (!is_numeric($schematicArray[$rowNumber - 1][$columnNumber - 1]) && $schematicArray[$rowNumber - 1][$columnNumber - 1] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicArray[$rowNumber - 1][$columnNumber + 1])) {
            if (!is_numeric($schematicArray[$rowNumber - 1][$columnNumber + 1]) && $schematicArray[$rowNumber - 1][$columnNumber + 1] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicArray[$rowNumber + 1][$columnNumber])) {
            if (!is_numeric($schematicArray[$rowNumber + 1][$columnNumber]) && $schematicArray[$rowNumber + 1][$columnNumber] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicArray[$rowNumber + 1][$columnNumber - 1])) {
            if (!is_numeric($schematicArray[$rowNumber + 1][$columnNumber - 1]) && $schematicArray[$rowNumber + 1][$columnNumber - 1] !== '.') {
                $shouldAddNumber = true;
            }
        }
        if (isset($schematicArray[$rowNumber + 1][$columnNumber + 1])) {
            if (!is_numeric($schematicArray[$rowNumber + 1][$columnNumber + 1]) && $schematicArray[$rowNumber + 1][$columnNumber + 1] !== '.') {
                $shouldAddNumber = true;
            }
        }
        return $shouldAddNumber;
    }

    /**
     * @param  mixed  $schematicLine
     * @param  int|string  $columnNumber
     * @param  array  $schematicArray
     * @param  int  $rowNumber
     * @return mixed
     */
    public function shouldAddGear(
        mixed $schematicLine,
        int|string $columnNumber,
        array $schematicArray,
        int $rowNumber
    ): mixed {
        $gearData = [];
        $gearData['shouldSet'] = false;

        if (isset($schematicLine[$columnNumber - 1])) {
            if ($schematicLine[$columnNumber - 1] === '*') {
                $gearData['row'] = $rowNumber;
                $gearData['column'] = $columnNumber - 1;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicLine[$columnNumber + 1])) {
            if ($schematicLine[$columnNumber + 1] === '*') {
                $gearData['row'] = $rowNumber;
                $gearData['column'] = $columnNumber + 1;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicArray[$rowNumber - 1][$columnNumber])) {
            if ($schematicArray[$rowNumber - 1][$columnNumber] === '*') {
                $gearData['row'] = $rowNumber - 1;
                $gearData['column'] = $columnNumber;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicArray[$rowNumber - 1][$columnNumber - 1])) {
            if ($schematicArray[$rowNumber - 1][$columnNumber - 1] === '*') {
                $gearData['row'] = $rowNumber - 1;
                $gearData['column'] = $columnNumber - 1;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicArray[$rowNumber - 1][$columnNumber + 1])) {
            if ($schematicArray[$rowNumber - 1][$columnNumber + 1] === '*') {
                $gearData['row'] = $rowNumber - 1;
                $gearData['column'] = $columnNumber + 1;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicArray[$rowNumber + 1][$columnNumber])) {
            if ($schematicArray[$rowNumber + 1][$columnNumber] === '*') {
                $gearData['row'] = $rowNumber + 1;
                $gearData['column'] = $columnNumber;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicArray[$rowNumber + 1][$columnNumber - 1])) {
            if ($schematicArray[$rowNumber + 1][$columnNumber - 1] === '*') {
                $gearData['row'] = $rowNumber + 1;
                $gearData['column'] = $columnNumber - 1;
                $gearData['shouldSet'] = true;
            }
        }
        if (isset($schematicArray[$rowNumber + 1][$columnNumber + 1])) {
            if ($schematicArray[$rowNumber + 1][$columnNumber + 1] === '*') {
                $gearData['row'] = $rowNumber + 1;
                $gearData['column'] = $columnNumber + 1;
                $gearData['shouldSet'] = true;
            }
        }
        return $gearData;
    }
}