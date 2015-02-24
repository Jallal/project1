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

    public function presentStatus() {

        $html = <<<HTML
<table>
  <caption>SUDOKU WOO</caption>
  <colgroup><col><col><col>
  <colgroup><col><col><col>
  <colgroup><col><col><col>
  <tbody>
HTML;
        for ($i = 0; $i < 3; $i++) {
            $html .= <<<HTML
  <tbody>
   <tr> <td>1 <td>  <td>3 <td>6 <td>  <td>4 <td>7 <td>  <td>9
   <tr> <td>  <td>2 <td>  <td>  <td>9 <td>  <td>  <td>1 <td>
   <tr> <td>7 <td>  <td>  <td>  <td>  <td>  <td>  <td>  <td>6
HTML;
        }

        $html .= <<<HTML
</table>
HTML;


        return $html;
    }

}