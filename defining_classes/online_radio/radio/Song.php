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
     * @param string $songName
     * @param string $songLength
     * @throws InvalidSongException
     */
    public function __construct(string $artistName, string $songName, string $songLength)
    {
        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setSongLength($songLength);
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

    /**
     * @param string $artistName
     * @throws InvalidArtistNameException
     */
    private function setArtistName(string $artistName): void
    {
        $nameLength = strlen($artistName);
        if ($nameLength < 3 || $nameLength > 20) {
            throw new InvalidArtistNameException();
        }
        $this->artistName = $artistName;
    }

    /**
     * @param string $songName
     * @throws InvalidSongNameException
     */
    private function setSongName(string $songName): void
    {
        $songNameLength = strlen($songName);
        if ($songNameLength < 3 || $songNameLength > 30) {
            throw new InvalidSongNameException();
        }
        $this->songName = $songName;
    }

    /**
     * @param string $songLength
     * @throws InvalidSongLengthException
     */
    private function setSongLength(string $songLength): void
    {
        [$songMinutes, $songSeconds]= explode(':', $songLength);
        if ($songMinutes < 0 || $songMinutes > 14) {
            throw new InvalidSongMinutesException();
        } elseif ($songSeconds < 0 || $songSeconds > 59) {
            throw new InvalidSongSecondsException();
        }

        $this->songLength = $songLength;
    }




}