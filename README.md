# Laravel La Voz

This package is a wrapper of
[La Voz Feed Generator](http://github.com/zephia/la-voz) package
PHP Class for Laravel Framework.

## Installation

Using [composer](http://getcomposer.org)

```bash
$ composer require zephia/laravel-la-voz
```

```php
// config/app.php
<?php

return [
    'providers' => [
        // ...
        Zephia\LaravelLaVoz\Provider\LaravelLaVozServiceProvider::class
        // ...
    ]
];
```

## Usage

```php
<?php
$adBag = new \Zephia\LaVozFeed\Entity\AdBag();
app('la-voz')->generate($adBag);
```
