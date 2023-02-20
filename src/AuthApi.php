<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Entities\Auth\AuthRequest;
use MagDv\Sbis\Entities\Auth\AuthResponse;
use MagDv\Sbis\Interfaces\AuthApiInterface;
use Nyholm\Psr7\Request;

class AuthApi extends BaseClient implements AuthApiInterface
{
    /**
     * @throws \MagDv\Sbis\Exception\SbisApiException
     */
    public function auth(AuthRequest $request): AuthResponse
    {
        $req = new Request(
            'POST',
            $this->url . 'auth/service/',
            [
                'Content-Type' => 'application/json;charset=utf-8',
                'Accept' => 'application/json',
            ],
            $this->serializer->serialize($request, 'json')
        );

        $response = $this->send($req);

        /** @var AuthResponse $body */
        $body = $this->serializer->deserialize($response->getBody()->getContents(), AuthResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }
}
