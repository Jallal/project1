<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/12/15
 * Time: 5:05 PM
 */

class SudokuCell {
    private $answer;       // The answer for the given cell
    private $showAnswer = false;   // Whether or not to show the answer
    private $notes = array();  // Notes of possible answers for the cell
    private $row;              // Row index for the cell 0-8
    private $column;           // Column index for the cell 0-8

    public function __construct($answer, $row, $column) {
        $this->answer = $answer;
        $this->row = $row;
        $this->column = $column;
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function getRow() {
        return $this->row;
    }

    public function getColumn() {
        return $this->column;
    }

    public function addNote($note) {
        $this->notes[] = $note;
    }

    public function getNotes() {
        return $this->notes;
    }

}