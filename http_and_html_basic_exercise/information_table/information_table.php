<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information Table</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form>
    Name:
   <input type="text" name="name" />
    <br>
    Phone:
    <input type="text" name="phone" />
    <br>
    Age:
    <input type="text" name="age" />
    <br>
    Address:
    <input type="text" name="address" />
    <br>
    <input type="submit" name="addUser" value="Add User">
</form>

<?php
include 'User.php';
if (isset($_GET['addUser'])) {
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    $user = new User($name,$age,$phone,$address);
    echo $user->createTable();
}
?>

</body>
</html>