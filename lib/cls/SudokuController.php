<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/7/15
 * Time: 11:58 PM
 */

class WumpusController
{

    private $sudoku;                // The Wumpus object we are controlling
    private $page = 'game.php';     // The next page we will go to
    private $reset = false;         // True if we need to reset the game





    public function __construct(sudoku $sudoku, $request) {


    }

    public function getPage(){
        return $this->page;

    }
    public function isReset(){
        return $this->reset;

    }

    /** Move request
     * @param $ndx Index of the cell in the sudoku */
    private function insert_into_cell($ndx) {

    }


/** Move request
* @param $ndx Index of the cell in the sudoku */
    private function check_status($ndx)
    {

    }

    /** Move request
     * @param $ndx Index of the cell in to show the hint in */
    private function hint($ndx)
    {

    }
}