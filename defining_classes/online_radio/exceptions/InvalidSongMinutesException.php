<?php

class InvalidSongMinutesException extends InvalidSongLengthException
{
    private const INVALID_MASSAGE = 'Song minutes should be between 0 and 14.';

    public function __construct(string $message = self::INVALID_MASSAGE, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}