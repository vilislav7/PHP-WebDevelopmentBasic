<?php

include_once '../exceptions/index.php';
include_once 'Song.php';
include_once 'RadioPlaylist.php';

$count = (int)readline();
$radioPlaylist = new RadioPlaylist();

while($count > 0) {
    $songInfo = readline();
    [$artist, $songName,$songLength] = explode(';', $songInfo);
    try {
        $song = new Song($artist, $songName, $songLength);
        $radioPlaylist->addSong($song);
    } catch (InvalidSongException $songException) {
        echo $songException->getMessage();
    }
    $count --;
}

echo $radioPlaylist;