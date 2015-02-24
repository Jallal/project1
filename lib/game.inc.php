<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/20/15
 * Time: 9:00 PM
 */


require __DIR__ . "/autoload.inc.php";
// Start the PHP session system
session_start();
define("SUDOKU_SESSION", 'sudoku');


if(!isset($_SESSION[SUDOKU_SESSION])){
    $_SESSION[SUDOKU_SESSION] = new SudokuModel();   // Seed: 1422668587

}

$sudoku = $_SESSION[SUDOKU_SESSION];