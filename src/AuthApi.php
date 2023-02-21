<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Entities\Auth\AuthRequest;
use MagDv\Sbis\Entities\Auth\AuthResponse;
use MagDv\Sbis\Entities\LogOut\LogOutRequest;
use MagDv\Sbis\Entities\LogOut\LogOutResponse;
use MagDv\Sbis\Interfaces\AuthApiInterface;
use Nyholm\Psr7\Request;

class AuthApi extends BaseClient implements AuthApiInterface
{
    public function auth(AuthRequest $request): AuthResponse
    {
        $req = new Request(
            'POST',
            $this->url . 'auth/service/',
            [
                'Content-Type' => 'application/json-rpc;charset=utf-8',
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

    public function logOut(LogOutRequest $request): LogOutResponse
    {
        $req = new Request(
            'POST',
            $this->url . 'auth/service/',
            [
                'Content-Type' => 'application/json-rpc;charset=utf-8',
                'Accept' => 'application/json',
            ],
            $this->serializer->serialize($request, 'json')
        );

        $response = $this->send($req);

        /** @var LogOutResponse $body */
        $body = $this->serializer->deserialize($response->getBody()->getContents(), LogOutResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }
}
