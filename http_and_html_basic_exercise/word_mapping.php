<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Mapping</title>
</head>
<body>
<form>
    <textarea name="text" id="text" rows="10" value="test"></textarea>
    <br/>
    <input type="submit" name="countWords" value="Count Words">
    <?php
    if (isset($_GET['countWords'])) {
        $text = $_GET['text'];
        $newString = str_replace(['!', '.', ',','?', '/', '\\', '@'], '',$text);
        $arr = explode(' ', $newString);

        $count = count($arr);
        $result = [];

        for ($i = 0; $i < $count; $i ++) {
            $currentWord = strtolower($arr[$i]);
            if (!array_key_exists($currentWord, $result)) {
                $result[$currentWord] = 0;
            }
            $result[$currentWord] ++ ;
        }

        echo '<table border="2">'.PHP_EOL;
        foreach ($result as $word => $times) {
            echo '  <tr>'.PHP_EOL;
            echo '    <td>'.PHP_EOL;
            echo $word . PHP_EOL;
            echo '    </td>'.PHP_EOL;
            echo '    <td>'.PHP_EOL;
            echo $times . PHP_EOL;
            echo '    </td>'.PHP_EOL;
            echo '  </tr>'.PHP_EOL;
        }
        echo '</table>';
        var_dump($result);
    }
    ?>
</form>
</body>
</html>