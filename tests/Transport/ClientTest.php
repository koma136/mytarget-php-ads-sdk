<?php

namespace tests\Koma136\MyTarget\Transport\Middleware\Impl;

use Koma136\MyTarget\Context;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception as guzzleEx;
use GuzzleHttp\Psr7 as psr;
use MyTarget as f;
use Koma136\MyTarget\Client;
use Koma136\MyTarget\Transport\Exception as ex;
use Koma136\MyTarget\Transport\GuzzleHttpTransport;
use Koma136\MyTarget\Transport\HttpTransport;
use Koma136\MyTarget\Transport\Middleware\HttpMiddlewareStackPrototype;
use Koma136\MyTarget\Transport\RequestFactory;
use PHPUnit_Framework_MockObject_MockObject;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testRequestSuccess()
    {
        /** @var HttpTransport|PHPUnit_Framework_MockObject_MockObject $http */
        $http = $this->getMockBuilder(GuzzleHttpTransport::class)
                     ->disableOriginalConstructor()
                     ->getMock();

        $http
            ->expects(self::once())
            ->method('request')
            ->willReturn(call_user_func(function() {
                $response = $this->getMock(ResponseInterface::class);
                $response->method('getBody')
                         ->willReturn(psr\stream_for('{"json": true}'));

                return $response;
            }))
        ;

        $client = new Client(
            new RequestFactory(new psr\Uri('https://target.my.com')),
            HttpMiddlewareStackPrototype::newEmpty($http)
        );

        self::assertNotEmpty($client->get('/any/path', null, new Context()));
    }

    /**
     *
     */
    public function testRequestTransportException()
    {
        $guzzle = $this->getMock(ClientInterface::class);
        $guzzle->method('send')
            ->willThrowException(new guzzleEx\ClientException('', $this->getMock(RequestInterface::class)));

        $client = new Client(
            new RequestFactory(new psr\Uri('https://target.my.com')),
            HttpMiddlewareStackPrototype::newEmpty(new GuzzleHttpTransport($guzzle))
        );

        $this->setExpectedException(ex\NetworkException::class);

        $client->get('/any/path', null, new Context());
    }
}
