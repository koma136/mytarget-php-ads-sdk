<?php

namespace Koma136\MyTarget\Transport\Middleware\Impl;

use Koma136\MyTarget\Context;
use Koma136\MyTarget\Transport\HttpTransport;
use Koma136\MyTarget\Transport\Middleware\HttpMiddleware;
use Koma136\MyTarget\Transport\Middleware\HttpMiddlewareStack;
use Psr\Http\Message\RequestInterface;

class TerminatingMiddleware implements HttpMiddleware
{
    /**
     * @var HttpTransport
     */
    private $http;

    public function __construct(HttpTransport $http)
    {
        $this->http = $http;
    }

    /**
     * @inheritdoc
     */
    public function request(RequestInterface $request, HttpMiddlewareStack $stack, Context $context)
    {
        return $this->http->request($request, $context);
    }
}
