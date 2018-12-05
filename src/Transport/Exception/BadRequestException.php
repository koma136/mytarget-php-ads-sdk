<?php

namespace Koma136\MyTarget\Transport\Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use yii\helpers\Json;

/**
 * Class BadRequestException
 * @package Koma136\MyTarget\Transport\Exception
 */
class BadRequestException extends ClientErrorException
{
    /**
     * BadRequestException constructor.
     * @param $message
     * @param RequestInterface $request
     * @param ResponseInterface|null $response
     * @param \Exception|null $previous
     */
    public function __construct($message, RequestInterface $request, ResponseInterface $response = null, \Exception $previous = null)
    {
        print_r(Json::decode($response->getBody()));

        parent::__construct($message, $request, $response,$previous);

    }

}
