<?php

class InvalidSongSecondsException extends InvalidSongLengthException
{
    private const INVALID_MASSAGE = 'Song seconds should be between 0 and 59.';

    public function __construct(string $message = self::INVALID_MASSAGE, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}