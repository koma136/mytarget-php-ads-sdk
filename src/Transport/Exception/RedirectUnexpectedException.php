<?php

namespace Koma136\MyTarget\Transport\Exception;

use Koma136\MyTarget\Exception\ApiException;

class RedirectUnexpectedException extends RequestException
    implements ApiException
{
}
