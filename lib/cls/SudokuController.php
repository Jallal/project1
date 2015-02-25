<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/7/15
 * Time: 11:58 PM
 */

class SudokuController{

    private $sudoku;                // The Wumpus object we are controlling
    private $page = 'game.php';     // The next page we will go to
    private $reset = false;         // True if we need to reset the game


    public function __construct($sudoku, $request) {
        $this->sudoku = $sudoku;

        //$this->insert_into_cell($request['x'], $request['y'],$request['cell_value']);

        var_dump("*********%%%%%%%%%%%%%%%%**************");
        var_dump(isset($request['x']));
        var_dump(isset($request['y']));
        var_dump(isset($request['cell_value']));

        var_dump("*********%%%%%%%%%%%%%%%%**************");


        if(isset($request['n'])){
            //new game
            $this->reset = true;
        }
        elseif(isset($request['cell_value'])){

          $this->insert_into_cell(0,0,cell_value);
        }
    }



    public function getPage(){

        var_dump("***********************");
        return $this->page;

    }
    public function isReset(){
        return $this->reset;

    }

    /** Move request
     * @param $ndx Index of the cell in the sudoku */
    private function insert_into_cell($row, $column,$value) {

        var_dump($row);
        var_dump($column);
        var_dump($value);

        if($this->sudoku->isUserGuessCorrect($row, $column)===$value)
        {
            return   $this->sudoku->getUserGuessForCell($value, $row, $column);
        }
        else
        {
           echo 'wrong answar';

        }

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