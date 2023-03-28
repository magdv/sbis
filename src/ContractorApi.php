<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use MagDv\Sbis\Entities\Contractor\GetInfo\Request\GetInfoRequest;
use MagDv\Sbis\Entities\Contractor\GetInfo\Response\GetInfoResponse;
use MagDv\Sbis\Interfaces\ContractorApiInterface;
use Nyholm\Psr7\Request;

class ContractorApi extends BaseClient implements ContractorApiInterface
{
    public function getInfo(GetInfoRequest $request): GetInfoResponse
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

        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300 && $request->params->memberParam->extendedFields) {
            $array = json_decode($data, true);

            $array['result']['boxes'] = $array['result']['Идентификатор'];
            $array['result']['Идентификатор'] = '';
            $data = json_encode($array, JSON_UNESCAPED_UNICODE);
        }

        /** @var GetInfoResponse $body */
        $body = $this->serializer->deserialize($data, GetInfoResponse::class, 'json');
        $body->statusCode = $response->getStatusCode();

        return $body;
    }
}
