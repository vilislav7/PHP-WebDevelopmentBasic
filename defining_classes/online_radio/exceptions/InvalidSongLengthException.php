<?php

class InvalidSongLengthException extends InvalidSongException
{
    private const INVALID_MASSAGE = 'Invalid song length';

    public function __construct(string $message = self::INVALID_MASSAGE, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}