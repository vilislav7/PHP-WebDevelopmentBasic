<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
</head>
<body>
<form action="calc.php" method="get">
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
    <input type="submit" name="calculate" value="Submit">
    <?php if(isset($output)) : ?>
    <div>
        <label for="output"> Result: </label>
        <input type="text" id="output" readonly disabled="disabled" value="<?= $output; ?>"/>
    </div>
    <?php endif; ?>
</form>
</body>
</html>