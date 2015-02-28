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

<a href="game-post.php?c">Cheat Mode</a>



<br>Enter the player name to start a new game:<br>
<form   name=username" action="game-post.php?username" method="post">
    <input type="text" name="name" placeholder="Text" value="">
    <br>
    <input type="submit"  name ="username" value="submit">
</form>

</body>

</html>

