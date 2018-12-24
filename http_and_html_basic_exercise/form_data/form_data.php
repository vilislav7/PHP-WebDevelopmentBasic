<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Two Numbers</title>
</head>
<body>
<form method="post">
    <input type="text" name="name">
    <br>
    <input type="text" name="age">
    <br>
    <input type="radio" name="gender" value="male">Male
    <br>
    <input type="radio" name="gender" value="female">Female
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    include 'UserData.php';

    if (isset($_POST['submit'], $_POST['gender'], $_POST['age'], $_POST['name'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $user = new UserData($name, $age, $gender);
        echo '<p>'.$user->getData().'</p>';
    }
?>
</body>
</html>