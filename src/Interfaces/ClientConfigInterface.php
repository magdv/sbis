<?php

declare(strict_types=1);

namespace MagDv\Sbis\Interfaces;

use JMS\Serializer\Serializer;
use Psr\Http\Client\ClientInterface;

interface ClientConfigInterface
{
    public function getSerializer(): Serializer;

    public function getUrl(): string;

    public function getLogin(): string;
    public function getPassword(): string;

    public function getClient(): ClientInterface;
}
