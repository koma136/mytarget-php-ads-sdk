<?php

namespace Koma136\MyTarget\Transport\Exception;

use Koma136\MyTarget\Exception\ApiException;

class ServerErrorException extends RequestException
    implements ApiException
{
}
