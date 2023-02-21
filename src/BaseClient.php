<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use JMS\Serializer\Serializer;
use MagDv\Sbis\Exception\SbisApiException;
use MagDv\Sbis\Interfaces\ClientConfigInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BaseClient
{
    private ClientInterface $client;

    protected ?string $sessionId = null;

    protected string $url;

    protected Serializer $serializer;


    public function __construct(ClientConfigInterface $config)
    {
        $this->url = $config->getUrl();
        $this->client = $config->getClient();
        $this->serializer = $config->getSerializer();
    }

    /**
     * @param string|null $sessionId
     */
    public function setSessionId(?string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    protected function send(RequestInterface $request): ResponseInterface
    {
        try {
            if ($this->sessionId) {
                $request = $request->withAddedHeader('X-SBISSessionID', $this->sessionId);
            }
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $clientException) {
            throw new SbisApiException('Sbis client exception: ' . $clientException->getMessage(), $clientException->getCode(), $clientException);
        }

        return $response;
    }
}
