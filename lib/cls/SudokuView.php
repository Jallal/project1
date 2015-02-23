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
    public function __construct(SudokuModel $sudokus) {
       $this->sudoku = $sudokus;
    }

    public function presentCell($ndx) {

        $html = <<<HTML
<div class="cells">
<table border="1" style="width:100%">


HTML;
        for ($i = 0; $i < 9; $i++) {
            $html .= <<<HTML
            <tr>
                <td>$i,0 - <a href="cell.php?x=$i&y=0">Input</a></td>
                <td>$i,1 - <a href="cell.php?x=$i&y=1">Input</a></td>
                <td>$i,2 - <a href="cell.php?x=$i&y=2">Input</a></td>
                <td>$i,3 - <a href="cell.php?x=$i&y=3">Input</a></td>
                <td>$i,4 - <a href="cell.php?x=$i&y=4">Input</a></td>
                <td>$i,5 - <a href="cell.php?x=$i&y=5">Input</a></td>
                <td>$i,6 - <a href="cell.php?x=$i&y=6">Input</a></td>
                <td>$i,7 - <a href="cell.php?x=$i&y=7">Input</a></td>
                <td>$i,8 - <a href="cell.php?x=$i&y=8">Input</a></td>
            </tr>
HTML;
        }

        $html .= <<<HTML
</table>
</div>
HTML;


        return $html;
    }



    public function presentStatus()
    {

    }
}