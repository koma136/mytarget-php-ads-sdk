<?php

namespace Koma136\MyTarget\Operator\Exception;

use Koma136\MyTarget\Exception\MyTargetException;

class UnexpectedFileArgumentException extends \InvalidArgumentException
    implements MyTargetException
{
    /**
     * @param mixed $file
     */
    public function __construct($file)
    {
        parent::__construct(sprintf("Unexpected type: %s (StreamInterface, resource or file path is expected)",
            is_object($file) ? get_class($file) : gettype($file)));
    }
}
