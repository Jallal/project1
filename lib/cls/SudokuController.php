<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/7/15
 * Time: 11:58 PM
 */

class SudokuController{

    private $sudoku;                // The Wumpus object we are controlling
    private $page ='game.php';     // The next page we will go to
    private $reset = false;
    private $cheatmode = false;

    public function __construct($sudoku, $request) {

            $this->sudoku = $sudoku;

        if(isset($request['c'])){
            //activate the cheat mode
            $this->cheatmode = true;
        }

        elseif(isset($request['submit_button'])) {
                $row = $request['x'];
                $column = $request['y'];
                $guess = $request['cell_value'];
                $this->insert_into_cell($row, $column, $guess);
        }
        elseif(isset($request['note_button'])){
                $row = $request['x'];
                $column = $request['y'];
                $note = $request['cell_note'];
                $this->hint($note,$row, $column);
            }
        elseif(isset($request['n'])){
            //new game
            $this->reset = true;
        }

        elseif(isset($request['gaveup'])){
            //activate the cheat mode
            $this->giveup();
        }


    }

    public function getPage(){
        return $this->page;
    }
    public function isReset(){
        return $this->reset;

    }

    public function IscheatMode(){

       $this->cheatmode;
    }

    /** Move request
     * @param $ndx Index of the cell in the sudoku */
    private function insert_into_cell($row, $column,$guess) {

        if($this->sudoku->getAnswerForCell($row, $column)==$guess){
            $this->sudoku->setUserGuessForCell($guess, $row, $column);
        }

        if($this->check_status()){
            $this->won();
        }
    }


/** Move request
* @param $ndx Index of the cell in the sudoku */
    private function check_status()
    {

        return false;

    }

    /** Move request
     * @param $ndx Index of the cell in to show the hint in */
    private function hint($note,$row, $column)
    {
        $this->sudoku->addNoteForCell($note, $row, $column);

    }

    private function giveup()
    {
        $this->reset = true;
        $this->page = 'giveup.php';

    }
    private function won()
    {
        $this->reset = true;
        $this->page = 'win.php';

    }
}