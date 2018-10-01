<?php

namespace Koma136\MyTarget\Token\ClientCredentials;

use Koma136\MyTarget\Context;
use Psr\Http\Message\RequestInterface;

interface CredentialsProvider
{
    /**
     * @param RequestInterface $request
     * @param Context $context
     *
     * @return Credentials
     */
    public function getCredentials(RequestInterface $request, Context $context);
}
