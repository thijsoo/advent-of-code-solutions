<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2024\Day2\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2024\Day2\src\Challenge;

class Day2Test extends TestCase {

	protected function setUp(): void {
		parent::setUp();

	}

    public function testCha1()
    {
        $input = [
            "7 6 4 2 1",
"1 2 7 8 9",
"9 7 6 2 1",
"1 3 2 4 5",
"8 6 4 4 1",
"1 3 6 7 9",
        ];
        $c = new Challenge();

        $c->setLines($input);

        $this->assertSame(4, $c->solveSecond());
    }
}
