# PHP-Weather

## Пакет для получения информации о погоде по любой локации

## Установка

```shell
composer require sigmarius/php-weather
```

## Использование

```php
<?php 
use Sigmarius/PhpWeather/Weather;

// получить API Key можно здесь: https://www.weatherapi.com/my/
$apiKey = '**********';

$weather = new Weather($apiKey);

$data = $weather->location('Moscow')
    ->get();

// Температура в градусах Цельсия
echo "Погода в градусах Цельсия: $data->celsius()" . PHP_EOL;

// Температура по Фаренгейту
echo "Погода в градусах Цельсия: $data->fahrenheit()" . PHP_EOL;
```