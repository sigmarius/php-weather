<?php

use Sigmarius\PhpWeather\Weather;

require 'vendor/autoload.php';

$weather = new Weather('83d9ba97a33a4a9c90773353251308');
//$weather = new Weather();

$result = $weather
//    ->location('Vladimir')
    ->location()
    ->get();

dd($result->getCelsius(), $result->getFahrenheit());
