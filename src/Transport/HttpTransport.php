<?php

namespace Koma136\MyTarget\Transport;

use Koma136\MyTarget\Context;
use Koma136\MyTarget\Transport\Exception\NetworkException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpTransport
{
    /**
     * @param RequestInterface $request
     * @param Context $context
     *
     * @return ResponseInterface
     * @throws NetworkException
     */
    public function request(RequestInterface $request, Context $context);
}
