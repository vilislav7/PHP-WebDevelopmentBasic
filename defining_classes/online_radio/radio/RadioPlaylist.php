<?php

include 'Song.php';
include '../exceptions/index.php';
class RadioPlaylist
{
    /** @var Song[] */
    private $songs;

    public function __construct()
    {
        $this->songs = [];
    }

    /**
     *@param Song $song
     */
    public function addSong(Song $song) : void {
        $this->songs[] = $song;
    }

    public function getPlaylistCount() : int {
        return count($this->songs);
    }

}

