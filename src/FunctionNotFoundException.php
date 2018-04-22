<?php

namespace fwrapper\Functional;

use RuntimeException;
use Throwable;


class FunctionNotFoundException extends RuntimeException
{


public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
{
    parent::__construct($message, $code, $previous);
}

}
