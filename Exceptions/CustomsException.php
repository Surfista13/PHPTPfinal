<?php
require_once ('Exceptions/IException.php');
abstract class CustomsException extends Exception implements IException
{
    protected $message = 'Unknown exception';     // Exception message
    private   $string;                            // Unknown
    protected $code;                                // User-defined exception code
    protected string $file;                         // Source filename of exception
    protected int $line;                              // Source line of exception
    private $trace;                                    // Unknown

    public function __construct($message = null, $code = 0)
    {
        if (!$message) {
            throw new $this('Unknown '. get_class($this));
        }
        parent::__construct($message, $code);
    }

}