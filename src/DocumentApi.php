<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Entities\Document\Download\Request\DownloadRequest;
use MagDv\Sbis\Entities\Document\Download\Response\DownloadResponse;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesRequest;
use MagDv\Sbis\Entities\Document\ListOfChanges\Response\ListOfChangesResponse;
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
        $data = $this->prepareResponse($response);
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
        $data = $this->prepareResponse($response);

        /** @var MakeActionResponse $body */
        $body = $this->serializer->deserialize($data, MakeActionResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }

    public function listOfChanges(ListOfChangesRequest $listOfChangesRequest): ListOfChangesResponse
    {
        $req = new Request(
            'POST',
            $this->url . 'service/',
            [
                'Content-Type' => 'application/json-rpc;charset=utf-8',
                'Accept' => 'application/json',
            ],
            $this->serializer->serialize($listOfChangesRequest, 'json')
        );

        $response = $this->send($req);
        $data = $this->prepareResponse($response);

        /** @var ListOfChangesResponse $body */
        $body = $this->serializer->deserialize($data, ListOfChangesResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }

    public function downloadDocument(DownloadRequest $downloadRequest): DownloadResponse
    {
        $req = new Request(
            'GET',
            $downloadRequest->url
        );

        $response = $this->send($req);
        $data = $this->prepareResponse($response);

        if ($response->getStatusCode() === 500) {
            /** @var DownloadResponse $body */
            $body = $this->serializer->deserialize($data, DownloadResponse::class, 'json');
            $body->statusCode = $response->getStatusCode();
        } else {
            /** @var DownloadResponse $body */
            $body = new DownloadResponse();
            $body->content = $data;
            $body->statusCode = $response->getStatusCode();
        }

        return $body;
    }
}
