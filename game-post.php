<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/20/15
 * Time: 9:01 PM
 */

require 'lib/game.inc.php';

$controller = new SudokuController($sudoku, $_REQUEST);

if($controller->isReset()) {
    unset($_SESSION[SUDOKU_SESSION]);
}

//echo"<p>" .$controller->getPage()."</p>";
header('Location: ' . $controller->getPage());

//phpinfo();
?>