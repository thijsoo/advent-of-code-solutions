<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2019\Day1\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2019\Day1\src\Challenge;

class Day1Test extends TestCase {

    public $sut;
	protected function setUp(): void {
		parent::setUp();

        $this->sut = new Challenge();
	}

    public function testSolution1()
    {
        $this->assertEquals(3394106,$this->sut->solveFirst());
    }

    public function testSolution2()
    {
        $lines = [100756];
        $this->sut->setLines($lines);

        $this->assertEquals(50346,$this->sut->solveSecond());
    }
}
