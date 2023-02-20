<?php

declare(strict_types=1);

namespace Test\base;

use GuzzleHttp\Client;
use MagDv\Sbis\ClientConfig;
use Psr\Http\Client\ClientInterface;
use Test\enums\ConfigNames;

class LocalConfig extends ClientConfig
{
    private ?string $login;
    private ?string $password;

    public function __construct(?string $login = null, ?string $password = null)
    {
        $this->login = $login;
        $this->password = $password;
    }

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

    public function getLogin(): string
    {
        return $this->login ?: getenv(ConfigNames::LOGIN);
    }

    public function getClient(): ClientInterface
    {
        return new Client(
            [
                'debug' => true,
            ]
        );
    }

    public function getPassword(): string
    {
        return $this->password ?: getenv(ConfigNames::PASSWORD);
    }
}
