<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<form action="hello_person.php">
    Name: <input type="text" name="person" />
    <input type="submit">
    <?php
        if (isset($_GET['person'])) {
            echo "Hello, {$_GET['person']}!";
        }
    ?>
</form>
</body>
</html>