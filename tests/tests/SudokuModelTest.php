<?php
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SudokuModelTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$sudoku = new SudokuModel(1);
		$this->assertInstanceOf("SudokuModel", $sudoku);
	}
}

/// @endcond
?>
