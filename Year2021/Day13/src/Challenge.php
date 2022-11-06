<?php


namespace Thijsvanderheijden\Adventofcode\Days\Year2021\Day13\src;


use Thijsvanderheijden\Adventofcode\Days\Base\ChallengeBase;

class Challenge extends ChallengeBase {


	/**
	 * Day1Challenge constructor.
	 */
	public function __construct() {
		$this->relativePath = dirname(__DIR__);
		parent::__construct();
	}

	public function solveFirst(  ) {
		$f = new PaperFolder($this->lines);
        $f->createMatrix();
        $d = $f->getDirections();


        $f->fold($d[0]['direction'], $d[0]['position']);
        dd($f->countMarks());
	}
	public function solveSecond(  ) {
        $f = new PaperFolder($this->lines);
       $f->createMatrix();
        $d = $f->getDirections();

        foreach ($d as $key => $dd) {
            $f->fold($dd['direction'], $dd['position']);
            //$f->renderMatrix($f->getMatrix());
        }
        $f->renderMatrix($f->getMatrix());
        dd($f->countMarks());
	}
}