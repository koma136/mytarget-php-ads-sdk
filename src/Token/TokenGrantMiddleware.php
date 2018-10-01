<?php

namespace Koma136\MyTarget\Token;

use Koma136\MyTarget\Context;
use Koma136\MyTarget\Token\Exception\TokenLimitReachedException;
use Koma136\MyTarget\Transport\Middleware\HttpMiddleware;
use Koma136\MyTarget\Transport\Middleware\HttpMiddlewareStack;
use Psr\Http\Message\RequestInterface;
use Koma136\MyTarget\Token\Exception\TokenLockException;
use Koma136\MyTarget\Token\Exception\TokenRequestException;

class TokenGrantMiddleware implements HttpMiddleware
{
    /**
     * @var TokenManager
     */
    private $tokens;

    public function __construct(TokenManager $tokens)
    {
        $this->tokens = $tokens;
    }

    /**
     * @inheritdoc
     *
     * @throws TokenLockException
     * @throws TokenLimitReachedException
     * @throws TokenRequestException
     */
    public function request(RequestInterface $request, HttpMiddlewareStack $stack, Context $context)
    {
        $token = $this->tokens->getToken($request, $context);

        /** @var RequestInterface $request */
        $request = $request->withHeader('Authorization', sprintf('Bearer %s', $token->getAccessToken()));

        return $stack->request($request, $context);
    }
}
