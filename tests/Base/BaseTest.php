<?php

declare(strict_types=1);

namespace Test\Base;

use PHPUnit\Framework\TestCase;
use Test\Helpers\ApiClient;

class BaseTest extends TestCase
{
    private ?ApiClient $api = null;

    public static function setUpBeforeClass(): void
    {
        $params = parse_ini_file(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . '.env');

        foreach ($params as $name => $value) {
            putenv($name . '=' . $value);
        }
    }

    protected function getApiClient(): ApiClient
    {
        if (null === $this->api) {
            $this->api = new ApiClient();
        }
        return $this->api;
    }
}
