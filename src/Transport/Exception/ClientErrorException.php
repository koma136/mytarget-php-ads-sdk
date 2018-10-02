<?php

namespace Koma136\MyTarget\Transport\Exception;

use Koma136\MyTarget\Exception\ApiException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ClientErrorException extends RequestException
    implements ApiException
{
    /**
     * @param RequestInterface $req
     * @param ResponseInterface $res
     * @return ClientErrorException
     */
    public static function fromResponse(RequestInterface $req, ResponseInterface $res)
    {
        $message = "MyTarget: Client Error {$res->getStatusCode()} {$res->getReasonPhrase()} {$res->getBody()}";

        switch ($res->getStatusCode()) {
            case 404:
                return new NotFoundException($message, $req, $res);
            case 403:
                return new AccessForbiddenException($message, $req, $res);
            default:
                return new ClientErrorException($message, $req, $res);
        }
    }
}
