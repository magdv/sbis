<?php

declare(strict_types=1);

namespace Test\Functional;

use MagDv\Sbis\AuthApi;
use MagDv\Sbis\Entities\Auth\AuthParam;
use MagDv\Sbis\Entities\Auth\AuthParams;
use MagDv\Sbis\Entities\Auth\AuthRequest;
use Test\base\BaseTest;
use Test\base\LocalConfig;

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

        $this->assertNotEmpty($response->result);
    }
}
