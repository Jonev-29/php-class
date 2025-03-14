<?php
include("header.html");
?>

<?php

// time to do some math
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$maths = array(
    1 => 'Add',
    'Subtract',
    'Multiply',
    'Divide'
);



?>
<br>
<form action="math.php" method='post'>
    <p><?php
    print '<select name="maths">';
    foreach ($maths as $math => $value) {
        print "\n<option value=\"$math\">$value</option>";
    }

    ?>
        </select></p><br><br>
    <p><input type="number" name="num1"></p><br>
    <p><input type="number" name="num2"></p><br>
    <input type="submit" name="submit" value="Do the math">
    <?php
    if ($_POST['maths'] == '1') {
        $result = $num1 + $num2;
        $ex = " + ";
    } elseif ($_POST['maths'] == '2') {
        $result = $num1 - $num2;
        $ex = " - ";
    } elseif ($_POST['maths'] == '3') {
        $result = $num1 * $num2;
        $ex = " x ";
    } elseif ($_POST['maths'] == '4') {
        $result = $num1 / $num2;
        $ex = " / ";
    }
    print '<p>' . $num1 . $ex . $num2 . ' = ' . $result . '</p>';
    ?>
</form>