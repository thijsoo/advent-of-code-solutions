<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day5\tests;

use PHPUnit\Framework\TestCase;
use Thijsvanderheijden\Adventofcode\Days\Year2022\Day5\src\Challenge;

class Day5Test extends TestCase {

	private $sut;

	protected function setUp(): void {
		parent::setUp();

		$this->sut = new Challenge();
		$stacks    = [
			[ "N", "Z" ],
			[ "D", "C", "M" ],
			[ "P" ],
		];
		$this->sut->setStacks( $stacks );
	}

	public function testExample() {
		$lines = [
			"move 1 from 2 to 1",
			"move 3 from 1 to 3",
			"move 2 from 2 to 1",
			"move 1 from 1 to 2",
		];
		$this->sut->setLines( $lines );

		//dump($this->sut->solveFirst());
	}
	public function testExample2() {
		$lines = [
			"move 1 from 2 to 1",
			"move 3 from 1 to 3",
			"move 2 from 2 to 1",
			"move 1 from 1 to 2",
		];
		$this->sut->setLines( $lines );

		dump($this->sut->solveSecond());
	}
}
