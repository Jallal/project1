<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/7/15
 * Time: 11:33 PM
 */

class SudokuView {

    private $sudoku;    // The sudoku object


    /**
     * Constructor
     * @param Wumpus $wumpus The Wumpus object
     */
    public function __construct(suduku $suduku) {
        $this->sudoku = $suduku;
    }


    /** Generate the HTML for the number of arrows remaining */
    public function presentArrows() {
        $a = $this->wumpus->numArrows();
        return "<p>You have $a arrows remaining.</p>";
    }


    /** Present the links for a room
     * @param $ndx An index 0 to 2 for the three rooms */
    /** Present the links for a room
     * @param $ndx An index 0 to 2 for the three rooms */
    public function presentCell($ndx) {
        //$room = $this->wumpus->getCurrent()->getNeighbors()[$ndx];
        //$roomnum = $room->getNum();
        //$roomndx = $room->getNdx();
        //$roomurl = "game-post.php?m=$roomndx";
        //$shooturl = "game-post.php?s=$roomndx";

        $html = <<<HTML
<div class="cells">
<table border="1" style="width:100%">
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
</div>
HTML;

        return $html;
    }



    public function presentStatus()
    {

    }
}