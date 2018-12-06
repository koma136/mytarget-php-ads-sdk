
Unofficial MyTarget API Client
==============================

PHP клиент для работы с MyTarget API (v1/v2).
SDK использует объекты Yii 2 

### Install it via composer
```
composer require koma136/my-target-sdk
```

fork dsl/my-target-sdk

Для Yii 2 в index.php пишем:

$autoloader = require(__DIR__ . '/../../vendor/autoload.php');
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);


Добавлен TopMailOperator для создания счетчиков top.mail.ru, нужно при организации ремаркетинга.
Основанно на супер документации )) https://help.mail.ru/top/API/main

### Пример пролучения ключа с обновлением

```
use Koma136\MyTarget\Token\Token;
use Koma136\MyTarget\Operator\V2\TokenOperator;
use Koma136\MyTarget\Client;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Uri;

$array_token = 
[
    'access' => BJJHBKBUIHJMNGJHVBJKNJLHJKHJFDSDBFBFHMGHNCXFGHCFYJVDXFGHFG
    'type' => Bearer
    'refresh' => xcdfghdfghdfghdrthdjfdffkdvznsvkzsdzhuhusfryzsdygb
    'expires_at' => 2018-12-07T07:28:45+0000
]

$token = Token::fromArray($array_token);

if($token->isExpiredAt(new \DateTimeImmutable('now')))
    {
                return $this->refreshToken($token);
    } 
return $token;           


function refreshToken(Token $token,$username = null){


        $baseUri = new Uri('https://target-sandbox.my.com/');
        $http = new GuzzleHttpTransport(new GuzzleClient());
        $credentials = new Credentials($this->client_id, $this->client_secret);
        
        $httpStack = HttpMiddlewareStackPrototype::newEmpty($http);
        $httpStack->push(new ResponseValidatingMiddleware());
        $access_token = $token->getAccessToken();
        $httpStack->push(new CallbackMiddleware(
            function (RequestInterface $req, HttpMiddlewareStack $stack, $context = null) use ($access_token) {
                $req = $req->withHeader('Authorization', sprintf('Bearer %s', $access_token));
                return $stack->request($req, $context);
            }
        ));

        $client = new Client(new RequestFactory($baseUri), $httpStack);

        $tokenOperator = new TokenOperator($client);
        $tokennew = $tokenOperator->refresh($credentials,$token, new Context($username));

        return $tokennew;
    }

```

получение токена для клиента происходит так же, только вместо refresh делаем
```
$token = $tokenOperator->acquire($credentials, new Context($username));
```
где  $username - имя клиента, например 123123123@agency_client


### Получение списка клиентов 

```
 $operator = new ClientOperator($client, $mapper);
 $operator->all();
```



