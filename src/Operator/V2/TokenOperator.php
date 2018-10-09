<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Token\Token;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Token\ClientCredentials\Credentials;

class TokenOperator
{
    const TOKEN_URL = '/api/v2/oauth2/token.json';

    const GRANT_TYPE_AGENCY  = 'agency_client_credentials';
    const GRANT_TYPE_CLIENT  = 'client_credentials';
    const GRANT_TYPE_REFRESH = 'refresh_token';
    const GRANT_TYPE_AUTHORIZATION = 'authorization_code';

    /**
     * @var Client
     */
    private $client;


    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param Credentials $credentials
     * @param Context|null $context
     *
     * @return Token
     */
    public function acquire(Credentials $credentials, Context $context = null)
    {

        $payload = [
            ["name" => "grant_type", "contents" => $context->hasUsername() ? self::GRANT_TYPE_AGENCY : self::GRANT_TYPE_CLIENT ],
            ["name" => "client_id", "contents" => $credentials->getClientId()],
            ["name" => "client_secret", "contents" => $credentials->getClientSecret()],

        ];
        if($context->hasUsername()){
            $payload[] = ["name" =>'agency_client_name',"contents" => $context->getUsername()];
        }

        $json = $this->client->postMultipart(self::TOKEN_URL, $payload, null, $context);

        return Token::fromResponse($json,new \DateTimeImmutable('now'));
    }

    /**
     * @param Credentials $credentials
     * @param Token       $token
     * @param Context|null $context
     *
     * @return Token
     */
    public function refresh(Credentials $credentials, Token $token, Context $context = null)
    {
        $payload = [
            ["name" => "grant_type", "contents" => self::GRANT_TYPE_REFRESH],
            ["name" =>'refresh_token', "contents" => $token->getRefreshToken()],
            ["name" =>'client_id' , "contents"    => $credentials->getClientId()],
            ["name" =>'client_secret', "contents" => $credentials->getClientSecret()]
        ];

        $json = $this->client->postMultipart(self::TOKEN_URL, $payload, null, $context);

        return Token::fromResponse($json,new \DateTimeImmutable('now'));
    }
}
