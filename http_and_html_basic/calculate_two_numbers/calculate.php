<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
</head>
<body>
<form action="calculate.php" method="get">
    <label for="operation">Operation:</label>
    <select name="operation" id="operation">
        <option value="sum">Sum</option>
        <option value="subtract">Subtract</option>
    </select>
    <br>
    <label for="num1">Number 1</label>
    <input type="text" id="num1" name="num1">
    <br>
    <label for="num2">Number 2</label>
    <input type="text" id="num2" name="num2">
    <br>
    <input type="submit" value="Submit">
</form>
<div>
    <?php
    if(isset($_GET['operation'])) {
        $operation = $_GET['operation'];
        $num1 = (int)$_GET['num1'];
        $num2 = (int)$_GET['num2'];
        echo '<div>';
        if ($operation === 'sum') {
            echo "<input type='text' readonly disabled='disabled' value='".($num1 + $num2). "'>";
        } elseif ($operation === 'subtract') {
            echo "<input type='text' readonly disabled='disabled' value='".($num1 - $num2). "'>";
        } else {
            echo "<input type='text' disabled='disabled' readonly value='operation supplied '> ";
        }
        echo '</div>';
    }
    ?>
</div>
</body>
</html>