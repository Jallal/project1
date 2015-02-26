<?php
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SudokuViewTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct(){

		$sudoku = new SudokuModel(11);
		$view = new SudokuView($sudoku);
		$this->assertInstanceOf('SudokuView',$view);
	}

	public function test_updateStatus()
	{
		$sudoku = new SudokuModel(11);
		$view = new SudokuView($sudoku);

	}

	public function test_showMeNotes()
	{
		$sudoku = new SudokuModel(11);
		$sudoku->addNoteForCell(9,0,0);
		$view = new SudokuView($sudoku);
		$status = $view->showMeNotes(0,0);
		$this->assertContains('9',$status);

	}
}

/// @endcond
?>
