<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day7\src;

class File {

	public int $size;
	public string $name;

	/**
	 * @param int    $size
	 * @param string $name
	 */
	public function __construct( int $size, string $name ) {
		$this->size = $size;
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getSize(): int {
		return $this->size;
	}


}
