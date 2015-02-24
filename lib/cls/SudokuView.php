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
   <td>{$sudo->getDefaultValue($i,0)}
   <td>{$sudo->getDefaultValue($i,1)}
   <td>{$sudo->getDefaultValue($i,2)}
   <td>{$sudo->getDefaultValue($i,3)}
   <td>{$sudo->getDefaultValue($i,4)}
   <td>{$sudo->getDefaultValue($i,5)}
   <td>{$sudo->getDefaultValue($i,6)}
   <td>{$sudo->getDefaultValue($i,7)}
   <td>{$sudo->getDefaultValue($i,8)}

HTML;
        }

        $html .= <<<HTML
</table>
HTML;


        return $html;
    }


}