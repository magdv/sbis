<?php

declare(strict_types=1);

namespace Test\Functional;

use MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesFilter;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesParams;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesRequest;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\Navigation;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\Organization;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\Ul;
use MagDv\Sbis\Entities\Document\MakeAction\Request\Action;
use MagDv\Sbis\Entities\Document\MakeAction\Request\MakeActionRequest;
use MagDv\Sbis\Entities\Document\MakeAction\Request\Sign;
use MagDv\Sbis\Entities\Document\MakeAction\Request\Stage;
use MagDv\Sbis\Entities\Document\SendDocument\Request\Attachment;
use MagDv\Sbis\Entities\Document\SendDocument\Request\Document;
use MagDv\Sbis\Entities\Document\SendDocument\Request\DocumentParams;
use MagDv\Sbis\Entities\Document\SendDocument\Request\File;
use MagDv\Sbis\Entities\Document\SendDocument\Request\Regulations;
use MagDv\Sbis\Entities\Document\SendDocument\Request\SendDocumentRequest;
use Test\Base\BaseTest;

class DocumentTest extends BaseTest
{
    public function testSendDocument(): void
    {
        $docId = uniqid('', false);
        $xml = file_get_contents(dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'Files' . DIRECTORY_SEPARATOR . 'ON_TRNACLGROT_2BE94753d4334f44be09e919a0ca73a8f62_2BE960d0c66163011e384c4005056b70d90_2BEbb1e8a9bc7d1450bbdb207c6808f406a_0_20230307_d8e50ad4-67a7-4a7d-b4dd-80868f40e107.xml');
        $sig = file_get_contents(dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'Files' . DIRECTORY_SEPARATOR . 'ON_TRNACLGROT_2BE94753d4334f44be09e919a0ca73a8f62_2BE960d0c66163011e384c4005056b70d90_2BEbb1e8a9bc7d1450bbdb207c6808f406a_0_20230307_d8e50ad4-67a7-4a7d-b4dd-80868f40e107.xml.sig');
        $client = $this->getApiClient();

        $apiFactory = $client->getApi();

        $document = $apiFactory->getDocument();

        $request = new SendDocumentRequest();
        $request->params = new DocumentParams();
        $request->params->documentParam = new Document();
        $request->params->documentParam->id = $docId;
        $request->params->documentParam->regulations = new Regulations();

        $attachment = new Attachment();
        $attachment->file = new File();
        $attachment->file->name = 'ON_TRNACLGROT_2BE94753d4334f44be09e919a0ca73a8f62_2BE960d0c66163011e384c4005056b70d90_2BEbb1e8a9bc7d1450bbdb207c6808f406a_0_20230307_d8e50ad4-67a7-4a7d-b4dd-80868f40e107.xml';
        $attachment->file->data = base64_encode($xml);

        $request->params->documentParam->attachments[] = $attachment;

        $response = $document->sendDocument($request);
        $attachmentId = $response->result->attachments[0]->id ?? null;

        $this->assertTrue($response->isOk());
        $this->assertEquals($docId, $response->result->id);
        $this->assertEquals('Исходящий', $response->result->direction);
        $this->assertEquals('ConsignmentNote', $response->result->type);
        $this->assertNotEmpty($attachmentId);

        $stageId = $response->result->stages[0]->id;
        $this->assertNotEmpty($stageId);

        // тут проверяем ВыполнитьДействие

        $request = new MakeActionRequest();
        $request->params = new \MagDv\Sbis\Entities\Document\MakeAction\Request\DocumentParams();
        $request->params->documentParam = new \MagDv\Sbis\Entities\Document\MakeAction\Request\Document();
        $request->params->documentParam->id = $docId;
        $request->params->documentParam->stage = new Stage();

        $makeAttachment = new \MagDv\Sbis\Entities\Document\MakeAction\Request\Attachment();

        $makeAttachment->id = $attachmentId;

        $file = new \MagDv\Sbis\Entities\Document\MakeAction\Request\File();
        $file->name = 'ON_TRNACLGROT_2BE94753d4334f44be09e919a0ca73a8f62_2BE960d0c66163011e384c4005056b70d90_2BEbb1e8a9bc7d1450bbdb207c6808f406a_0_20230307_d8e50ad4-67a7-4a7d-b4dd-80868f40e107.xml.sig';
        $file->data = base64_encode($sig);


        $sign = new Sign();
        $sign->file = $file;

        $makeAttachment->sign = [$sign];

        $request->params->documentParam->stage->attachments[] = $makeAttachment;
        $request->params->documentParam->stage->actions = [new Action()];

        $actionResponse = $document->makeAction($request);

        $this->assertTrue($actionResponse->isOk());
        $this->assertEquals($docId, $actionResponse->result->id);


        // тут проверяем список изменений
        $changesRequest = new ListOfChangesRequest();

        $changesRequest->params = new ListOfChangesParams();

        $changesRequest->params->filter = new ListOfChangesFilter();
//        $changesRequest->params->filter->dateTimeFrom = (new \DateTimeImmutable($response->result->createDateTime.' - 2 minutes'))->format('d.m.Y H.i.s');
        $changesRequest->params->filter->organization = new Organization();
        $changesRequest->params->filter->organization->ul = new Ul();
        $changesRequest->params->filter->organization->ul->inn = '7017477919';// Это Корса
        $changesRequest->params->filter->organization->ul->kpp = '701701001';// Это Корса

        $changesRequest->params->filter->navigation = new Navigation();
        $changesRequest->params->filter->navigation->count = '50';

        $changes = $document->listOfChanges($changesRequest);

        $this->assertNotEmpty($changes->result->document);
    }
}
