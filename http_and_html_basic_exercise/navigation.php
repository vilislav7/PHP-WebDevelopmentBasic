<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navigation</title>
</head>
<body>
<form>
    <label for="categories">Categories</label>
    <input type="text" id="categories" name="categories">
    <br>
    <label for="tags">Tags</label>
    <input type="text" id="tags" name="tags">
    <br>
    <label for="months">Months</label>
    <input type="text" id="months" name="months">
    <br>
    <input type="submit" name="generate" value="Generate">
</form>
<?php

if (isset($_GET['generate'], $_GET['tags'], $_GET['categories'], $_GET['months'])) {
    $categories = explode(', ', $_GET['categories']);
    $tags = explode(', ', $_GET['tags']);
    $months = explode(', ', $_GET['months']);

    echo '<navigation>'.PHP_EOL;
    echo '    <p>'.PHP_EOL;
    echo '      Categories'.PHP_EOL;
    echo '    </p>'.PHP_EOL;
    echo '    <ul>'.PHP_EOL;
    foreach ($categories as $category) {
        echo '        <li>'.PHP_EOL;
        echo $category.PHP_EOL;
        echo '        </li>'.PHP_EOL;
    }
    echo '    </ul>'.PHP_EOL;

    echo '    <p>'.PHP_EOL;
    echo '      Tags'.PHP_EOL;
    echo '    </p>'.PHP_EOL;
    echo '    <ul>'.PHP_EOL;
    foreach ($tags as $tag) {
        echo '        <li>'.PHP_EOL;
        echo $tag.PHP_EOL;
        echo '        </li>'.PHP_EOL;
    }
    echo '    </ul>'.PHP_EOL;

    echo '    <p>'.PHP_EOL;
    echo '      Months'.PHP_EOL;
    echo '    </p>'.PHP_EOL;
    echo '    <ul>'.PHP_EOL;
    foreach ($months as $month) {
        echo '        <li>'.PHP_EOL;
        echo $month.PHP_EOL;
        echo '        </li>'.PHP_EOL;
    }
    echo '    </ul>'.PHP_EOL;
    echo '</navigation>';
}
?>
</body>
</html>