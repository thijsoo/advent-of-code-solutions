<?php

namespace Thijsvanderheijden\Adventofcode\Days\Year2022\Day7\src;

class Directory {


	/**
	 * @var array<\Thijsvanderheijden\Adventofcode\Days\Year2022\Day7\src\File>  $fileArray
	 */
	public array $fileArray = [];
	public string $name;

	/**
	 * @param string $name
	 */
	public function __construct( string $name ) { $this->name = $name; }


	public function addFile( File $file ) {
		$this->fileArray[] = $file;
	}

	public function getTotalSize(  ) {
		$size = 0;
		foreach ($this->fileArray as $file){
			$size += $file->getSize();
		}
	}


}
