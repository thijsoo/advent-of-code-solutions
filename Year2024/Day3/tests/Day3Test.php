<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2024\Day3\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2024\Day3\src\Challenge;

class Day3Test extends TestCase {

	protected function setUp(): void {
		parent::setUp();

	}

    public function testCha1()
    {
        $input = [
           "xmul(2,4)%&mul[3,7]!@^do_not_mul(5,5)+mul(32,64]then(mul(11,8)mul(8,5))"
        ];
        $c = new Challenge();

        $c->setLines($input);

        $this->assertSame(161, $c->solveFirst());
    }
    public function testCha2()
    {
        $input = [
            "xmul(2,4)&mul[3,7]!^don't()_mul(5,5)+mul(32,64](mul(11,8)undo()?mul(8,5))"
        ];
        $c = new Challenge();

        $c->setLines($input);

        $this->assertSame(48, $c->solveSecond());
    }
}
