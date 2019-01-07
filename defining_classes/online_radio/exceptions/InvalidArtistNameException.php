<?php

class InvalidArtistNameException extends InvalidSongException
{
    private const INVALID_MASSAGE = 'Artist name should be between 3 and 20 symbols.';

    public function __construct(string $message = self::INVALID_MASSAGE, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}