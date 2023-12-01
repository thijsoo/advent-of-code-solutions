<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2023\Day1\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2023\Day1\src\Challenge;

class Day1Test extends TestCase {

	protected function setUp(): void {
		parent::setUp();
	}


    public function testBla()
    {
        $input = [
            'two1nine',
'eightwothree',
'abcone2threexyz',
'xtwone3four',
'4nineeightseven2',
'zoneight234',
'7pqrstsixteen',
        ];
        $c = new Challenge();
        $c->setLines($input);

       $this->assertsame(281,$c->solveSecond()) ;
    }
}
