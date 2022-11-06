<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day9\src;

class Basin {

	private $start;
	private $rest;

	/**
	 * @param $start
	 */
	public function __construct( $start ) {
		$this->start = $start;
		$this->rest[] = $start;
	}


	public function getStart(  ) {
		return $this->start;
	}

	public function addNumber( $n ) {
		$this->rest[] = $n;
	}

	/**
	 * @return array
	 */
	public function getRest(): array {
		return $this->rest;
	}

}