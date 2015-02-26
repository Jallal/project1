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
  <colgroup><col><col><col>
  <colgroup><col><col><col>
  <colgroup><col><col><col>
  <tbody>
HTML;


        for ($x = 0; $x < 9; $x++) {
            if ($x % 3 == 0) {
                $html .= '<tbody>';
            }

            $html .= '<tr>';

            for($y = 0; $y < 9; $y++)
            {
                if ($this->sudoku->getDefaultValue($x,$y) != 0) {
                    $html .= <<<HTML
                    <td><div class="cell">{$this->sudoku->getDefaultValue($x,$y)}</div>
HTML;
                } else if ($this->sudoku->getUserGuessForCell($x,$y)) {
                    $html .= <<<HTML
                    <td><a class="cell guess" href="cell.php?x=$x&y=$y">{$this->sudoku->getUserGuessForCell($x,$y)}</a>
HTML;

                } else if ($this->sudoku->getNotesForCell($x,$y) != array()){

                    $html .= '<td><div class="">';

                    foreach ($this->sudoku->getNotesForCell($x,$y) as $note){
                        $html .= $note;
                    }

                    $html .= '<br><a class="" href="cell.php?x=$x&y=$y">Guess</a></div>';
                } else {
                    $html .= <<<HTML
                    <td><a class="cell" href="cell.php?x=$x&y=$y">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
HTML;
                }


            }

        }


        $html .= <<<HTML
</table>
HTML;


        return $html;
    }

    public function showAnswer() {
        $html = <<<HTML
<table>
  <caption>You Gave Up! Here's the Answer for Sudoku Puzzle</caption>
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
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,0)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,1)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,2)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,3)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,4)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,5)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,6)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,7)}</div>
   <td><div class="cell">{$this->sudoku->getAnswerForCell($i,8)}</div>

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
            $allnotes = "";

            foreach($notes as $key=>$value)
            {

                $allnotes = " ".$value.$allnotes;

            }
        return $allnotes;
        }

    }




    public function showSolution() {


        $html = <<<HTML
<table>
  <caption>SUDOKU SOLUTION</caption>
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
   <td><a href="cell.php?x=$i&y=0">{$this->sudoku->getAnswerForCell($i,0)}</a>
   <td><a href="cell.php?x=$i&y=1">{$this->sudoku->getAnswerForCell($i,1)}</a>
   <td><a href="cell.php?x=$i&y=2">{$this->sudoku->getAnswerForCell($i,2)}</a>
   <td><a href="cell.php?x=$i&y=3">{$this->sudoku->getAnswerForCell($i,3)}</a>
   <td><a href="cell.php?x=$i&y=4">{$this->sudoku->getAnswerForCell($i,4)}</a>
   <td><a href="cell.php?x=$i&y=5">{$this->sudoku->getAnswerForCell($i,5)}</a>
   <td><a href="cell.php?x=$i&y=6">{$this->sudoku->getAnswerForCell($i,6)}</a>
   <td><a href="cell.php?x=$i&y=7">{$this->sudoku->getAnswerForCell($i,7)}</a>
   <td><a href="cell.php?x=$i&y=8">{$this->sudoku->getAnswerForCell($i,8)}</a>

HTML;
        }


        $html .= <<<HTML
</table>
HTML;


        return $html;
    }

}