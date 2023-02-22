<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Interfaces\ClientConfigInterface;

class SbisFactory
{
    private ClientConfigInterface $clientConfig;
    private ?string $sessionId = null;

    public function __construct(ClientConfigInterface $clientConfig)
    {
        $this->clientConfig = $clientConfig;
    }

    public function getAuth(): AuthApi
    {
        $auth = new AuthApi($this->clientConfig);
        $auth->setSessionId($this->sessionId);

        return $auth;
    }

    public function getContractor(): ContractorApi
    {
        $contractor = new ContractorApi($this->clientConfig);
        $contractor->setSessionId($this->sessionId);

        return $contractor;
    }

    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }
}
