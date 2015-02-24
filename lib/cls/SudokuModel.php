<?php

class SudokuModel {
    private $game;
    private $answer;
    private $cells = array();

    public function __construct($gameNum=-1) {
        $sudokuGame = new SudokuGame();
        $games = $sudokuGame->getGames();
        $answers = $sudokuGame->getAnswers();

        if ($gameNum == -1) {
            $selection = rand(0,9);
            $this->game = $games[$selection];
            $this->answer = $answers[$selection];

            $this->constructCells();
        } elseif($gameNum == 11) {
            $this->game = $sudokuGame->getCheatGame();
            $this->answer = $sudokuGame->getCheatAnswer();

            $this->constructCells();
        } else {
            $this->game = $games[$gameNum];
            $this->answer = $answers[$gameNum];

            $this->constructCells();
        }
    }

    private function constructCells()
    {
        for ($row = 0; $row < 9; $row++) {
            $oneRow = array();
            for ($column = 0; $column < 9; $column++) {
                $oneRow[] = new SudokuCell($this->answer[$row][$column], $row, $column, $this->game[$row][$column]);
            }
            $this->cells[] = $oneRow;
        }
    }

    public function getDefaultValue($row, $column) {
        return $this->cells[$row][$column]->getDefaultValue();
    }

    public function getCell($row, $column) {
        return $this->cells[$row][$column];
    }

    public function getAnswerForCell($row, $column) {
        return $this->cells[$row][$column]->getAnswer();
    }

    public function setUserGuessForCell($guess, $row, $column) {
        $cell = $this->cells[$row][$column];
        $cell->setUserGuess($guess);
        return $cell->isUserGuessCorrect();
    }

    public function isUserGuessCorrect($row, $column) {
        return $this->cells[$row][$column]->isUserGuessCorrect();
    }

    public function getUserGuessForCell($row, $column) {
        return $this->cells[$row][$column]->getUserGuess();
    }

    public function addNoteForCell($note, $row, $column) {
        $cell = $this->cells[$row][$column];
        $cell->addNote($note);
    }

    public function getNotesForCell($row, $column) {
        return $this->cells[$row][$column]->getNotes();
    }
}