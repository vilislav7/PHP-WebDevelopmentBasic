<?php

class InvalidSongNameException extends InvalidSongException
{
    private const INVALID_MASSAGE = 'Song name should be between 3 and 30 symbols.';

    public function __construct(string $message = self::INVALID_MASSAGE, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}