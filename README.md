# ChatWork channel for Laravel Log

Demo project  
https://github.com/kawax/laravel-logger-project

## Requirements
- Laravel >= 5.6
- PHP >= 7.1.3

## Installation

### Composer
```
composer require revolution/laravel-logger-chatwork
```

### config/logging.php

```php
    'channels' => [
        'stack' => [
            'driver'   => 'stack',
            'channels' => ['single', 'chatwork'],
        ],
        
        'chatwork' => [
            'driver' => 'custom',
            'via'    => Revolution\Laravel\Logger\ChatWork\ChatWorkLogger::class,
            'token'  => env('CHATWORK_TOKEN'),
            'room'   => env('CHATWORK_ROOM'),
            'level'  => 'emergency',
        ],
    ]
```

### .env
```
CHATWORK_TOKEN=
CHATWORK_ROOM=
```

## LICENSE
MIT
