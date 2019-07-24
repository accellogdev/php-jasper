<?php

namespace PHPJasper\Exception;

use Exception;

class InvalidInputFileOrDir extends Exception
{
    /**
     * InvalidInputFileOrDir constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        $message = 'No input file or input dir';
        parent::__construct($message, $code, $previous);
    }
}
