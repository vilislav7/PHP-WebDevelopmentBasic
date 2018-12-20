<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dump Get</title>
</head>
<body>
<form action="dump_GET.php">
    <label for="name">Name:</label>
    <br />
    <input type="text" name="name" id="name" />
    <br />
    <label for="age">Age:</label>
    <br />
    <input type="text" name="age" id="age" />
    <br />
    <label for="town">Town</label>
    <br />
    <select name="town" id="town">
        <option value="Sofia">Sofia</option>
        <option value="Plovdiv">Plovdiv</option>
        <option value="Varna">Varna</option>
    </select>
    <br />
    <input type="submit" name="submit">
    <?php
        if (isset($_GET['submit'])) {
            var_dump($_GET);
        }
    ?>
</form>
</body>
</html>