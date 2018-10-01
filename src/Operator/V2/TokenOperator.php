<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Token;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Token\ClientCredentials\Credentials;

class TokenOperator
{
    const TOKEN_URL = '/api/v2/oauth2/token.json';

    const GRANT_TYPE_AGENCY  = 'agency_client_credentials';
    const GRANT_TYPE_CLIENT  = 'client_credentials';
    const GRANT_TYPE_REFRESH = 'refresh_token';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param Credentials $credentials
     * @param Context|null $context
     *
     * @return Token
     */
    public function acquire(Credentials $credentials, Context $context = null)
    {
        $username = $context->hasUsername() ? $context->getUsername() : null;

        $payload = [
            ["name" => "grant_type", "contents" => $username ? self::GRANT_TYPE_CLIENT : self::GRANT_TYPE_AGENCY],
            ["name" => "client_id", "contents" => $credentials->getClientId()],
            ["name" => "client_secret", "contents" => $credentials->getClientSecret()]
        ];

        if ($username) {
            $payload[] = ["name" =>'agency_client_name',"contents" => $username];
        }
        $json = $this->client->postMultipart(self::TOKEN_URL, $payload, null, $context);

        return $this->mapper->hydrateNew(Token::class, $json);
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
            'grant_type'    => self::GRANT_TYPE_REFRESH,
            'refresh_token' => $token->getRefresh(),
            'client_id'     => $credentials->getClientId(),
            'client_secret' => $credentials->getClientSecret()
        ];

        $json = $this->client->postMultipart(self::TOKEN_URL, $payload, null, $context);

        return $this->mapper->hydrateNew(Token::class, $json);
    }
}
