<?php

namespace Sigmarius\PhpWeather;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use IlluminateAgnostic\Arr\Support\Arr;
use Sigmarius\PhpWeather\API\WeatherClient;
use Sigmarius\PhpWeather\Exceptions\EmptyApiKeyException;
use Sigmarius\PhpWeather\Exceptions\EmptyLocationException;
use Sigmarius\PhpWeather\Models\Result;

class Weather
{
    private string $location;

    private WeatherClient $weatherClient;

    /**
     * @throws Exception
     */
    public function __construct(?string $apiKey = null)
    {
        if (empty($apiKey)) {
            throw new EmptyApiKeyException('API Key not set');
        }

        $this->weatherClient = new WeatherClient($apiKey);
    }

    /**
     * Возвращаем себя же, чтобы использовать fluent интерфейс
     * @param string|null $location
     * @return $this
     * @throws Exception
     */
    public function location(?string $location = null): static
    {
        if (empty($location)) {
            throw new EmptyLocationException('Location not set');
        }

        $this->location = $location;
        return $this;
    }

    /**
     * @throws GuzzleException
     */
    public function get(): Result
    {
        // -> API -> data -> Result
        $data = $this->weatherClient->request($this->location);

        return (new Result())
            ->setCelsius(Arr::get($data, 'current.temp_c', 0))
            ->setFahrenheit(Arr::get($data, 'current.temp_f', 0));
    }
}
