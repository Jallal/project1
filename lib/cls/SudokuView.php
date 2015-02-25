<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/7/15
 * Time: 11:33 PM
 */

class SudokuView {

    private $sudoku;    // The sudoku object



    public function __construct(SudokuModel  $sudoku) {
       $this->sudoku = $sudoku;

    }


    public function updatedStatus() {



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
   <td><a href="cell.php?x=$i&y=0">{$this->sudoku->getDefaultValue($i,0)}</a>
   <td><a href="cell.php?x=$i&y=1">{$this->sudoku->getDefaultValue($i,1)}</a>
   <td><a href="cell.php?x=$i&y=2">{$this->sudoku->getDefaultValue($i,2)}</a>
   <td><a href="cell.php?x=$i&y=3">{$this->sudoku->getDefaultValue($i,3)}</a>
   <td><a href="cell.php?x=$i&y=4">{$this->sudoku->getDefaultValue($i,4)}</a>
   <td><a href="cell.php?x=$i&y=5">{$this->sudoku->getDefaultValue($i,5)}</a>
   <td><a href="cell.php?x=$i&y=6">{$this->sudoku->getDefaultValue($i,6)}</a>
   <td><a href="cell.php?x=$i&y=7">{$this->sudoku->getDefaultValue($i,7)}</a>
   <td><a href="cell.php?x=$i&y=8">{$this->sudoku->getDefaultValue($i,8)}</a>

HTML;
        }


        $html .= <<<HTML
</table>
HTML;


        return $html;
    }


    public function showMeNotes($row,$column)
    {
        if(sizeof($this->sudoku->getNotesForCell($row,$column))){

            $notes = $this->sudoku->getNotesForCell($row,$column);

            foreach($notes as $key=>$value)
            {

                echo " ".$value;

            }

        }

    }


}