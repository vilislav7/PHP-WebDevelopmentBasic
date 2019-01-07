<?php

class InvalidSongException extends Exception
{
    private const INVALID_SONG = 'Invalid song.';

    public function __construct(string $message = self::INVALID_SONG, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}