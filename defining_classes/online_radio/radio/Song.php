<?php

class Song
{
    /** @var string $artistName */
    private $artistName;
    /** @var string $songName */
    private $songName;
    /** @var string $songLength */
    private $songLength;

    /**
     * Song constructor.
     * @param string $artistName
     * @param string $sontName
     * @param string $songLenght
     */
    public function __construct(string $artistName, string $songName, string $songLength)
    {
        $this->artistName = $artistName;
        $this->songName = $songName;
        $this->songLength = $songLength;
    }

    /**
     * @return string
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * @return string
     */
    public function getSongName(): string
    {
        return $this->songName;
    }

    /**
     * @return string
     */
    public function getSongLength(): string
    {
        return $this->songLength;
    }


}