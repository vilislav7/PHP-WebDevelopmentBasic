<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coloring Text</title>
</head>
<body>
<form>
    <input type="text" name="text" id="text" />
    <input type="submit" name="color" value="Color text">
</form>
<?php
    if (isset($_GET['color'])) {
        $text = $_GET['text'];
        $textArr = str_split($text);
        $count = count($textArr);

        for ($i = 0; $i < $count; $i++){
            $currentSymbol = $textArr[$i];
            if ( $currentSymbol !== ' ' && ord($currentSymbol) % 2 === 0) {
                echo "<p style='color: red; display: inline'>{$currentSymbol} </p>";
            } else {
                echo "<p style='color: blue; display: inline'>{$currentSymbol} </p>";
            }
        }
    }
?>
</body>
</html>