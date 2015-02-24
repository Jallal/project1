<?php
/** @file
 * @cond 
 * @brief Unit tests for the class SudokuGame
 */
class SudokuGameTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$sudokuGame = new SudokuGame();

		$this->assertInstanceOf("SudokuGame", $sudokuGame);
		$this->assertEquals(11, count($sudokuGame->getGames()));
		$this->assertEquals(11, count($sudokuGame->getAnswers()));
	}
}

/// @endcond
?>
