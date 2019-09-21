<?php declare (strict_types = 1);

namespace App\Model;

class ConfigFactory
{

    /** @var array */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getConfigs(): array
    {
        return $this->config;
    }
}
