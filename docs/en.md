# PHP-Weather

## Installation

```shell
composer require sigmarius/php-weather
```

## Usage

```php
<?php 
use Sigmarius/PhpWeather/Weather;

// get your API Key here: https://www.weatherapi.com/my/
$apiKey = '**********';

$weather = new Weather($apiKey);

$data = $weather->location('Moscow')
    ->get();
    
// Температура в градусах Цельсия
echo "Temperature by Ceslius Degrees: $data->celsius()" . PHP_EOL;

// Температура по Фаренгейту
echo "Temperature by Fahrenheit Degrees: $data->fahrenheit()" . PHP_EOL;
```