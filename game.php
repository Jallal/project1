<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/12/15
 * Time: 5:04 PM
 */
$view = new SudokuView($sudoku);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sudoku game </title>
    <link rel="stylesheet" href="Sudoku.css" />
</head>

<?php echo present_header("Sudoku"); ?>


<div class="cells">
    <?php
    echo $view->presentCell(0);
    echo $view->presentCell(1);
    echo $view->presentCell(2);
    ?>
</div>



