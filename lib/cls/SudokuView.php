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
    public function __construct(SudokuModel $sudoku) {
       // $this->sudoku = $suduku;
    }

    public function presentCell($ndx) {

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