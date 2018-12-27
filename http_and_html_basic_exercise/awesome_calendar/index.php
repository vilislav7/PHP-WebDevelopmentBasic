<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form >
    <label for="year">Year</label>
    <input type="text" id="year" name="year"/>
    <br>
    <input type="submit" name="submitYear" value="Enter"/>
</form>

<?php
    include_once 'classes/CalendarPrinter.php';

    if (isset($_GET['submitYear'])) {
        $year = (int)$_GET['year'];
        $calendar = new CalendarPrinter($year);
    }
?>

</body>
</html>