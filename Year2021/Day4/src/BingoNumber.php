<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day4\src;

class BingoNumber {

	private $number;
	private $isMarked = false;

	/**
	 * @param $number
	 */
	public function __construct(int $number ) {
		$this->number = $number;
	}

	public function mark(  ) {
		$this->isMarked = true;
	}

	public function isMarked(  ): bool {
		return $this->isMarked;
	}

	public function getNumber(): int {
		return $this->number;
	}


}