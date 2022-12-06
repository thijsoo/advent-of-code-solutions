<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day5\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {

	/*
					[G] [W]         [Q]
		[Z]         [Q] [M]     [J] [F]
		[V]         [V] [S] [F] [N] [R]
		[T]         [F] [C] [H] [F] [W] [P]
		[B] [L]     [L] [J] [C] [V] [D] [V]
		[J] [V] [F] [N] [T] [T] [C] [Z] [W]
		[G] [R] [Q] [H] [Q] [W] [Z] [G] [B]
		[R] [J] [S] [Z] [R] [S] [D] [L] [J]
		 1   2   3   4   5   6   7   8   9
	 */
	private $stacks = [
		[ "Z", "V", "T", "B", "J", "G", "R" ],
		[ "L", "V", "R", "J" ],
		[ "F", "Q", "S" ],
		[ "G", "Q", "V", "F", "L", "N", "H", "Z" ],
		[ "W", "M", "S", "C", "J", "T", "Q", "R" ],
		[ "F", "H", "C", "T", "W", "S" ],
		[ "J", "N", "F", "V", "C", "Z", "D" ],
		[ "Q", "F", "R", "W", "D", "Z", "G", "L" ],
		[ "P", "V", "W", "B", "J" ],
	];


	public function setStacks( $stacks ) {
		$this->stacks = $stacks;
	}

	public function setLines( $lines ) {
		$this->lines = $lines;
	}

	public function __construct() {
		$this->relativePath = dirname( __DIR__ );
		parent::__construct();

		for ( $i = 0; $i < 10; $i++ ) {
			unset( $this->lines[ $i ] );
		}
	}

	public function solveFirst() {

		foreach ( $this->lines as $line ) {
			[ $m, $amount, $f, $from, $t, $to ] = explode( " ", $line );

			for ( $i = 0; $i < $amount; $i++ ) {
				array_unshift( $this->stacks[ $to - 1 ], array_shift( $this->stacks[ $from - 1 ] ) );
			}

		}


		return implode( "", [
			$this->stacks[0][0],
			$this->stacks[1][0],
			$this->stacks[2][0],
			$this->stacks[3][0],
			$this->stacks[4][0],
			$this->stacks[5][0],
			$this->stacks[6][0],
			$this->stacks[7][0],
			$this->stacks[8][0],
		] );
	}

	public function solveSecond() {
		foreach ( $this->lines as $line ) {
			[ $m, $amount, $f, $from, $t, $to ] = explode( " ", $line );


			$temp = [];
			for ( $i = 0; $i < $amount; $i++ ) {
				$temp[] = array_shift( $this->stacks[ $from - 1 ] );

			}

			$this->stacks[ $to - 1 ] = array_merge( $temp, $this->stacks[ $to - 1 ] );
		}

		return implode( "", [
			$this->stacks[0][0],
			$this->stacks[1][0],
			$this->stacks[2][0],
			$this->stacks[3][0],
			$this->stacks[4][0],
			$this->stacks[5][0],
			$this->stacks[6][0],
			$this->stacks[7][0],
			$this->stacks[8][0],
		] );
	}

}
