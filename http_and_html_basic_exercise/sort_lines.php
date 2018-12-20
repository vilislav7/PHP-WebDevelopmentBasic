<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort Lines</title>
</head>
<body>
<form>
    <textarea name="text" id="text" rows="10" value="test"><?php
        if (isset($_GET['sort'])) {
            $text = $_GET['text'];
            $text_values = explode(PHP_EOL, $text);
            sort($text_values);

            echo trim(implode(PHP_EOL, $text_values));
        }
        ?></textarea>
    <br/>
    <input type="submit" name="sort" value="Sort">

</form>
</body>
</html>