<?php

declare(strict_types=1);

namespace Test\Helpers;

use DivineOmega\DOFileCache\DOFileCache;
use Exception;
use MagDv\Sbis\Entities\Auth\AuthParam;
use MagDv\Sbis\Entities\Auth\AuthParams;
use MagDv\Sbis\Entities\Auth\AuthRequest;
use MagDv\Sbis\SbisFactory;
use Test\Base\LocalConfig;
use Test\Enums\ConfigNames;

class ApiClient
{
    private ?SbisFactory $api = null;

    private ?DOFileCache $cache = null;


    public function __construct()
    {
        $this->cache = Cache::getCache();
    }

    private function auth(): void
    {
        $sessionId = $this->cache->get(ConfigNames::SESSION_ID);
        if (false === $sessionId) {
            $this->setSessionToken();
        } else {
            $this->api->setSessionId($sessionId);
        }
    }

    private function setSessionToken(): void
    {
        $request = new AuthRequest();

        $param = new AuthParam();
        $param->login = (string)getenv('LOGIN');
        $param->password = (string)getenv('PASSWORD');

        $params = new AuthParams();
        $params->param = $param;

        $request->params = $params;

        $auth = $this->api->getAuth();

        $response = $auth->auth($request);

        if (!$response->isOk()) {
            throw new Exception($response->error->message, $response->statusCode);
        }

        $this->cache->set(ConfigNames::SESSION_ID, $response->result, strtotime('+ 11 hours'));
        $this->api->setSessionId($response->result);
    }

    public function getApi(): SbisFactory
    {
        $this->api = new SbisFactory(new LocalConfig());
        $this->auth();

        return $this->api;
    }

    public function clearSessionToken(): void
    {
        $this->cache->delete(ConfigNames::SESSION_ID);
    }
}
