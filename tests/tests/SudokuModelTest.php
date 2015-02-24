<?php
/** @file
 * @cond 
 * @brief Unit tests for the class SudokuModel
 */
class SudokuModelTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		$sudoku = new SudokuModel(1);
		$this->assertInstanceOf("SudokuModel", $sudoku);

		// Ensure we have 81 cells
		for($row = 0; $row < 9; $row++) {
			for($column = 0; $column < 9; $column++) {
				$this->assertInstanceOf("SudokuCell",$sudoku->getCell($row, $column));
			}
		}
	}

	public function test_getAnswerForCell() {
		$sudoku = new SudokuModel(0);
		$this->assertEquals(8, $sudoku->getAnswerForCell(0,0));
	}

	public function test_getDefaultValue() {
		$sudoku = new SudokuModel(0);
		$this->assertEquals(0, $sudoku->getDefaultValue(0,0));
	}

	public function test_getCell() {
		$sudoku = new SudokuModel(0);
		$this->assertInstanceOf("SudokuCell", $sudoku->getCell(0,0));
	}

	public function test_setUserGuessForCell() {
		$sudoku = new SudokuModel(0);
		$sudoku->setUserGuessForCell(3, 0, 0);

		$this->assertEquals(3, $sudoku->getUserGuessForCell(0,0));
	}

	public function test_isUserGuessCorrect() {
		$sudoku = new SudokuModel(0);
		$sudoku->setUserGuessForCell(3,0,0);

		$this->assertFalse($sudoku->isUserGuessCorrect(0,0));
	}

	public function test_addNoteForCell() {
		$sudoku = new SudokuModel(0);
		$sudoku->addNoteForCell(7,0,0);

		$notes = $sudoku->getNotesForCell(0,0);

		$this->assertTrue(in_array(7, $notes));
	}
}

/// @endcond
?>
