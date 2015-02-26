<?php
/**
 * Created by PhpStorm.
 * User: elhazzat
 * Date: 2/23/15
 * Time: 6:08 PM
 */
?>
<html>
    <form   name=userinput" action="game-post.php" method="post">
        Enter value for cell:<br>
        <input type="text" name="cell_value" value="0-9">
        <input type="hidden" name="x" value="<?php echo $_GET['x']; ?>">
        <input type="hidden" name="y" value="<?php echo $_GET['y']; ?>">
    <br>
        <br>
    <input type="submit"  name ="submit_button" value="Submit">

    <br>Enter a note for cell:<br>
    <form   name=usernotes" action="game-post.php" method="post">
    <input type="text" name="cell_note" value="0-9">
    <input type="hidden" name="x" value="<?php echo $_GET['x']; ?>">
    <input type="hidden" name="y" value="<?php echo $_GET['y']; ?>">
    <br>
    <br>
    <input type="submit"  name ="note_button" value="add note">
    </form>
</html>