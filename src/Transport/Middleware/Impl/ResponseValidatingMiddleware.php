<?php

namespace Koma136\MyTarget\Transport\Middleware\Impl;

use Koma136\MyTarget\Context;
use Koma136\MyTarget\Limiting\Exception\BannerLimitException;
use Koma136\MyTarget\Limiting\LimitingMiddleware;
use Koma136\MyTarget\Transport\Exception as ex;
use Koma136\MyTarget\Transport\Middleware\HttpMiddleware;
use Koma136\MyTarget\Transport\Middleware\HttpMiddlewareStack;
use Psr\Http\Message\RequestInterface;

class ResponseValidatingMiddleware implements HttpMiddleware
{
    /**
     * @inheritdoc
     */
    public function request(RequestInterface $request, HttpMiddlewareStack $stack, Context $context)
    {
        $response = $stack->request($request, $context);
        $code = $response->getStatusCode();

        if ($code >= 500 && $code < 600) {
            if (503 === $code) {
                throw new ex\ServiceTemporarilyUnavailableException("503 Service Temporarily Unavailable", $request, $response);
            }
            throw new ex\ServerErrorException("MyTarget: {$code} Server Error", $request, $response);
        }

        if ($code >= 400 && $code < 500) {
            $body = $response->getBody();
            if (stripos($body, 'Active banners limit exceeded') !== false) {
                throw new BannerLimitException('Banners limit exceeded');
            }
            throw ex\ClientErrorException::fromResponse($request, $response);
        }

        if ($code >= 300 && $code < 400) { // safety net
            throw new ex\RedirectUnexpectedException("MyTarget: {$code} Redirect is not supported", $request, $response);
        }

        return $response;
    }
}
