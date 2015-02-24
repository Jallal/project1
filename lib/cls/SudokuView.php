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
       $this->sudoku = $sudoku;
    }

    public function presentStatus() {
        $sudo = new SudokuModel();

        $html = <<<HTML
<table>
  <caption>SUDOKU WOO</caption>
  <colgroup><col><col><col>
  <colgroup><col><col><col>
  <colgroup><col><col><col>
  <tbody>
HTML;
        for ($i = 0; $i < 9; $i++) {
            if ($i % 3 == 0) {
                $html .= '<tbody>';
            }
            $html .= <<<HTML
   <tr>
   <td><a href="cell.php?x=$i&y=0">{$sudo->getDefaultValue($i,0)}</a>
   <td><a href="cell.php?x=$i&y=1">{$sudo->getDefaultValue($i,1)}</a>
   <td><a href="cell.php?x=$i&y=2">{$sudo->getDefaultValue($i,2)}</a>
   <td><a href="cell.php?x=$i&y=3">{$sudo->getDefaultValue($i,3)}</a>
   <td><a href="cell.php?x=$i&y=4">{$sudo->getDefaultValue($i,4)}</a>
   <td><a href="cell.php?x=$i&y=5">{$sudo->getDefaultValue($i,5)}</a>
   <td><a href="cell.php?x=$i&y=6">{$sudo->getDefaultValue($i,6)}</a>
   <td><a href="cell.php?x=$i&y=7">{$sudo->getDefaultValue($i,7)}</a>
   <td><a href="cell.php?x=$i&y=8">{$sudo->getDefaultValue($i,8)}</a>

HTML;
        }


        $html .= <<<HTML
</table>
HTML;


        return $html;
    }


}