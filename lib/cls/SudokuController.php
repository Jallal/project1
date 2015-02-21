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
        //$this->wumpus = $wumpus;

       /* if(isset($request['c'])){
            $this->cheatMode = true;
        } else if(isset($request['m'])) {
            $this->move($request['m']);
        } else if(isset($request['s'])) {
            $this->shoot($request['s']);
        } else if(isset($request['n'])) {
            // New game!
            $this->reset = true;
        }*/

    }

    public function getPage(){
        return $this->page;

    }
    public function isReset(){
        return $this->reset;

    }



    /** Move request
     * @param $ndx Index for room to move to */
    private function insert_into_cell($ndx) {
        // Simple error check
        /*if(!is_numeric($ndx) || $ndx < 1 || $ndx > Wumpus::NUM_ROOMS) {
            return;
        }

        switch($this->wumpus->move($ndx)) {
            case Wumpus::HAPPY:
                break;

            case Wumpus::EATEN:
            case Wumpus::FELL:
                $this->reset = true;
                $this->page = 'lose.php';
                break;
        }*/
    }



    private function check_status($ndx)
    {

        /*switch($this->wumpus->shoot($ndx)) {
            case Wumpus::WUMPUS:
                $this->reset = true;
                $this->page = 'win.php';
                break;


        }
        if($this->wumpus->numArrows()===0){
            $this->reset = true;
            $this->page = 'lose.php';

    }*/
    }
    private function hint($ndx)
    {

    }
}