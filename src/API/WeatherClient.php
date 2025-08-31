<?php

namespace Sigmarius\PhpWeather\API;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * @see https://www.weatherapi.com/api-explorer.aspx
 */
class WeatherClient
{
    private const string HOST = 'https://api.weatherapi.com/v1/current.json?';

    private Client $httpClient;

    public function __construct(
        private readonly string $apiKey
    ) {
        $this->httpClient = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $query): array
    {
        $endpoint = self::HOST . http_build_query([
                'key' => $this->apiKey,
                'q' => $query,
            ]);

        $response = $this->httpClient
            ->get($endpoint);

        return json_decode($response->getBody()->getContents(), true);
    }
}
