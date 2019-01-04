<?php

include_once "BookCreator.php";

$authorInfo = explode(' ', readline());
[$authorFirstName, $authorLastName] = $authorInfo;
$bookTitle = readline();
$bookPrice = (float)readline();
$bookType = readline();


try {
    $author = new Author($authorFirstName, $authorLastName);
    $bookCreator = new BookCreator($author, $bookTitle, $bookPrice, $bookType);
    echo 'OK'.PHP_EOL;
    echo $bookCreator->getBookPrice();
} catch (Exception $e) {
    echo $e->getMessage();
}
