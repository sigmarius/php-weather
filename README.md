# PHP-Weather

**API Docs:** [Weather API](https://www.weatherapi.com/docs/)

## Documentation / Документация

- [English](docs/en.md)
- [Russian](docs/ru.md)

## Licence

MIT

## Usage

```
use Sigmarius/PhpWeather/Weather;

$weather = new Weather($apiKey);

$data = $weather->location('Moscow')->get();

// temperature by Ceslius Degrees
$data->celsius();

// temperature by Fahrenheit Degrees
$data->fahrenheit();
```