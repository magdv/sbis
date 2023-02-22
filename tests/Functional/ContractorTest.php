<?php

declare(strict_types=1);

namespace Test\Functional;

use MagDv\Sbis\Entities\Contractor\GetInfo\Request\GetInfoParams;
use MagDv\Sbis\Entities\Contractor\GetInfo\Request\GetInfoRequest;
use MagDv\Sbis\Entities\Contractor\GetInfo\Request\MemberParam;
use MagDv\Sbis\Entities\Contractor\GetInfo\Request\UlMember;
use Test\Base\BaseTest;

class ContractorTest extends BaseTest
{
    public function testGetContractorData(): void
    {
        $client = $this->getApiClient();

        $apiFactory = $client->getApi();

        $contractor = $apiFactory->getContractor();

        $request = new GetInfoRequest();
        $request->params = new GetInfoParams();
        $request->params->memberParam = new MemberParam();
        $request->params->memberParam->ul = new UlMember();
        $request->params->memberParam->ul->inn = '7601000985';
        $request->params->memberParam->ul->kpp = '760601001';
        $request->params->memberParam->ul->name = 'СК Премьер, ОАО';


        $response = $contractor->getInfo($request);

        $this->assertTrue($response->isOk());
        $this->assertNull($response->result->boxes);
        $this->assertEquals(7601000985, $response->result->member->inn);
        $this->assertEquals(760601001, $response->result->member->kpp);
        $this->assertEquals(643, $response->result->member->countryCode);
        $this->assertEquals('СК Премьер, ОАО', $response->result->member->name);
        $this->assertEquals('150044, г. Ярославль, пр-кт Октября, д. 78, -, -', $response->result->member->address);
    }

    public function testGetContractorExtendedData(): void
    {
        $client = $this->getApiClient();

        $apiFactory = $client->getApi();

        $contractor = $apiFactory->getContractor();

        $request = new GetInfoRequest();
        $request->params = new GetInfoParams();
        $request->params->memberParam = new MemberParam();
        $request->params->memberParam->ul = new UlMember();
        $request->params->memberParam->ul->inn = '7601000985';
        $request->params->memberParam->ul->kpp = '760601001';
        $request->params->memberParam->ul->name = 'СК Премьер, ОАО';
        $request->params->memberParam->extendedFields = 'СписокИдентификаторов';


        $response = $contractor->getInfo($request);

        $this->assertTrue($response->isOk());
        $this->assertNotNull($response->result->boxes);
        $this->assertEquals(7601000985, $response->result->member->inn);
        $this->assertEquals(760601001, $response->result->member->kpp);
        $this->assertEquals(643, $response->result->member->countryCode);
        $this->assertEquals('СК Премьер, ОАО', $response->result->member->name);
        $this->assertEquals('150044, г. Ярославль, пр-кт Октября, д. 78, -, -', $response->result->member->address);
        $box = $response->result->boxes[0];
        $this->assertEquals('Да', $box->main);
        $this->assertEquals('Нет', $box->roaming);
        $this->assertEquals('2BE', $box->operator->id);
        $this->assertEquals('ООО "Компания "Тензор"', $box->operator->name);
        $this->assertEquals('2', $box->status->code);
        $this->assertEquals('Без аккаунта (отправлено приглашение)', $box->status->description);
    }
}
