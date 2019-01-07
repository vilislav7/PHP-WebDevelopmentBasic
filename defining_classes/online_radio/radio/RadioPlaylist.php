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

    public function getPlaylistLength() : string {
        $minutes = 0;
        $seconds = 0;
        $hours = 0;

        foreach ($this->songs as $song) {
            [$songMinutes, $songSeconds] = explode(':', $song->getSongLength());
            $minutes += (int)$songMinutes;
            $seconds += (int)$songSeconds;
        }

        $secondsIntoMinutes = $seconds / 60;
        $seconds %= 60;

        $minutes += $secondsIntoMinutes;
        $hours += (int)($minutes / 60);
        $minutes %= 60;

        $minutes = $minutes < 10 ? "0{$minutes}" : $minutes;
        $seconds = $seconds < 10 ? "0{$seconds}" : $seconds;

        if ($hours >= 1) {
            return "{$hours}h {$minutes}m {$seconds}s";
        }

        return "{$minutes}m {$seconds}s";
    }
}

