<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2023\Day3\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2023\Day3\src\Challenge;

class Day3Test extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

    }

    public function testPartOne()
    {
        $lines = [
            "467..114..",
            "...*......",
            "..35..633.",
            "......#...",
            "617*......",
            ".....+.58.",
            "..592.....",
            "......755.",
            "...$.*....",
            ".664.598..",
        ];

        $c = new Challenge();
        $c->setLines($lines);

        $this->assertSame(467835, $c->solveSecond());
    }
}
