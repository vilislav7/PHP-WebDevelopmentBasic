<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Info</title>
</head>
<body>
    <form action="student.php">
        <label for="delimiter">Delimiter: </label>
        <select name="delimiter" id="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
        <br/>
        <label for="names">Names: </label>
        <input type="text" name="names" id="names">
        <br/>
        <label for="ages">Ages: </label>
        <input type="text" id="ages" name="ages">
        <br/>
        <input type="submit" value="Filter!" name="filter">
    </form>
    <?php if(isset($students)) : ?>
    <table border="1" cellpadding="0">
        <thead>
            <tr>
                <td>Name</td>
                <td>Age</td>
            </tr>
        </thead>
        <?php foreach($students as $age=>$name): ?>
            <tr>
                <td>
                    <?php echo $name?>
                </td>
                <td>
                    <?php echo $age?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</body>
</html>