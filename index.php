<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/12/15
 * Time: 5:03 PM
 */
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project 1 Sudoku</title>
</head>

<body>
<h1>Welcome to our Sudoku Game!</h1>
<a href="game-post.php?n">Play Sudoku</a>
<a href="game-post.php?c">Cheat Mode</a>



<br>Enter the player name :<br>
<form   name=usernotes" action="game-post.php" method="post">
    <input type="text" name="name" placeholder="1-9" value="">
    <br>
    <input type="submit"  name ="name" value="Submit">
</form>

</body>

</html>

