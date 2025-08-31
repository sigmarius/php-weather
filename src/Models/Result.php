<?php

namespace Sigmarius\PhpWeather\Models;

class Result
{
    private float|int $fahrenheit;

    private float|int $celsius;

    public function getCelsius(): float|int
    {
        return $this->celsius;
    }

    public function getFahrenheit(): float|int
    {
        return $this->fahrenheit;
    }

    /**
     * Fluent Setters (return $this)
     *
     * @return $this
     */
    public function setFahrenheit(float|int $fahrenheit): Result
    {
        $this->fahrenheit = $fahrenheit;

        return $this;
    }

    /**
     * Fluent Setters (return $this)
     *
     * @return $this
     */
    public function setCelsius(float|int $celsius): Result
    {
        $this->celsius = $celsius;

        return $this;
    }
}
