
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

### Пролучение ключа