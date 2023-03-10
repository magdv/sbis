<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Entities\Document\MakeAction\Request\MakeActionRequest;
use MagDv\Sbis\Entities\Document\MakeAction\Response\MakeActionResponse;
use MagDv\Sbis\Entities\Document\SendDocument\Request\SendDocumentRequest;
use MagDv\Sbis\Entities\Document\SendDocument\Response\SendDocumentResponse;
use MagDv\Sbis\Interfaces\DocumentApiInterface;
use Nyholm\Psr7\Request;

class DocumentApi extends BaseClient implements DocumentApiInterface
{
    public function sendDocument(SendDocumentRequest $request): SendDocumentResponse
    {
        $req = new Request(
            'POST',
            $this->url . 'service/',
            [
                'Content-Type' => 'application/json-rpc;charset=utf-8',
                'Accept' => 'application/json',
            ],
            $this->serializer->serialize($request, 'json')
        );

        $response = $this->send($req);
        $data = $response->getBody()->getContents();

        /** @var SendDocumentResponse $body */
        $body = $this->serializer->deserialize($data, SendDocumentResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }

    public function makeAction(MakeActionRequest $request): MakeActionResponse
    {
        $req = new Request(
            'POST',
            $this->url . 'service/',
            [
                'Content-Type' => 'application/json-rpc;charset=utf-8',
                'Accept' => 'application/json',
            ],
            $this->serializer->serialize($request, 'json')
        );

        $response = $this->send($req);
        $data = $response->getBody()->getContents();

        /** @var MakeActionResponse $body */
        $body = $this->serializer->deserialize($data, MakeActionResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }
}
