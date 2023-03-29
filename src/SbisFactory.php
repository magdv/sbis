<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Interfaces\AuthApiInterface;
use MagDv\Sbis\Interfaces\ClientConfigInterface;
use MagDv\Sbis\Interfaces\ContractorApiInterface;
use MagDv\Sbis\Interfaces\DocumentApiInterface;

class SbisFactory
{
    private ClientConfigInterface $clientConfig;
    private ?string $sessionId = null;

    public function __construct(ClientConfigInterface $clientConfig)
    {
        $this->clientConfig = $clientConfig;
    }

    public function getAuth(): AuthApiInterface
    {
        $auth = new AuthApi($this->clientConfig);
        $auth->setSessionId($this->sessionId);

        return $auth;
    }

    public function getContractor(): ContractorApiInterface
    {
        $contractor = new ContractorApi($this->clientConfig);
        $contractor->setSessionId($this->sessionId);

        return $contractor;
    }

    public function getDocument(): DocumentApiInterface
    {
        $documentApi = new DocumentApi($this->clientConfig);
        $documentApi->setSessionId($this->sessionId);

        return $documentApi;
    }

    public function setSessionId(?string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }
}
