<?php

declare(strict_types=1);

namespace Test\Base;

use GuzzleHttp\Client;
use MagDv\Sbis\ClientConfig;
use Psr\Http\Client\ClientInterface;
use Test\Enums\ConfigNames;

class LocalConfig extends ClientConfig
{
    public function getCachePath(): ?string
    {
        return null;
    }

    public function getIsDebug(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return getenv(ConfigNames::URL);
    }

    public function getClient(): ClientInterface
    {
        return new Client(
            [
                'debug' => true,
            ]
        );
    }
}
