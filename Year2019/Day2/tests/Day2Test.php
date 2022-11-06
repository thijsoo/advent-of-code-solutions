<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2019\Day2\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2019\Day2\src\Challenge;

class Day2Test extends TestCase {

    public $sut;
	protected function setUp(): void {
		parent::setUp();

        $this->sut = new Challenge();

	}

    public function testSolve1()
    {
        $this->sut->setLines([1,9,10,3,2,3,11,0,99,30,40,50]);

        $this->assertEquals(3500, $this->sut->solveFirst());
    }
}
