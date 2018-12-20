<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Two Numbers</title>
</head>
<body>
<?php
if (isset($_GET['submit'])) {
        $firstNum = (int)$_GET['firstNum'];
        $secondNum = (int)$_GET['secondNum'];
        $sum = (int)($_GET['firstNum'] + $_GET['secondNum']);
        echo "{$firstNum} + {$secondNum} = {$sum}";
    }
?>
<form action="sum_two_numbs.php">
    First Number:
    <input type="text" name="firstNum">
    <br>
    Second Number:
    <input type="text" name="secondNum">
    <br>
    <input type="submit" name="submit">
</form>
</body>
</html>