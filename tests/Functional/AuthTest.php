<?php

declare(strict_types=1);

namespace Test\Functional;

use MagDv\Sbis\AuthApi;
use MagDv\Sbis\Entities\Auth\AuthParam;
use MagDv\Sbis\Entities\Auth\AuthParams;
use MagDv\Sbis\Entities\Auth\AuthRequest;
use MagDv\Sbis\Entities\LogOut\LogOutRequest;
use Test\Base\BaseTest;
use Test\Base\LocalConfig;

class AuthTest extends BaseTest
{
    public function testAuth(): void
    {
        $authApi = new AuthApi(new LocalConfig());

        $request = new AuthRequest();

        $param = new AuthParam();
        $param->login = (string)getenv('LOGIN');
        $param->password = (string)getenv('PASSWORD');

        $params = new AuthParams();
        $params->param = $param;

        $request->params = $params;

        $response = $authApi->auth($request);

        $this->assertTrue($response->isOk());
        $this->assertNotEmpty($response->result);
    }

    public function testLogOutError(): void
    {
        $authApi = new AuthApi(new LocalConfig());

        $response = $authApi->logOut(new LogOutRequest());

        $this->assertFalse($response->isOk());
        $this->assertNull($response->result);
        $this->assertEquals(0, $response->id);
        $this->assertEquals('Ошибка входных параметров: не передан идентификатор сессии', $response->error->message);
        $this->assertEquals('warning', $response->error->type);
    }

    public function testLogOut(): void
    {
        $client = $this->getApiClient();
        // Заранее очищаем токен
        $client->clearSessionToken();

        $apiFactory = $client->getApi();

        $sessionId = $apiFactory->getSessionId();
        $this->assertNotNull($sessionId);

        $auth = $apiFactory->getAuth();

        $response = $auth->logOut(new LogOutRequest());

        // Очищаем кеш, т.к. токен невалиден
        $client->clearSessionToken();

        $this->assertTrue($response->isOk());
        $this->assertNull($response->result);
    }
}
