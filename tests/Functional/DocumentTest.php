<?php

declare(strict_types=1);

namespace Test\Functional;

use MagDv\Sbis\Entities\Document\Download\Request\DownloadRequest;
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

        // урл заранее был создан и через какое - то время он может исчезнуть и тесты будут падать. Надо переделать тесты так, чтобы урл брался из ответов $changes
//        $downloadRequest = new DownloadRequest();
//        $downloadRequest->url = 'https://fix-online.sbis.ru/pdfservicepublic/service/?method=%D0%A1%D0%B5%D1%80%D0%B2%D0%B8%D1%81PDF.%D0%A1%D0%B8%D0%BD%D1%85%D1%80%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F%D0%9F%D0%B5%D1%87%D0%B0%D1%82%D1%8C&params=eyJEb2N1bWVudHMiOnsicyI6W3sibiI6ItCY0LTQniIsInQiOiLQp9C40YHQu9C%2BINGG0LXQ%0Au9C%2B0LUifSx7Im4iOiLQoNCw0LfQtNC10LsiLCJ0Ijoi0KfQuNGB0LvQviDRhtC10LvQvtC1%0AIn0seyJ0Ijp7Im4iOiLQnNCw0YHRgdC40LIiLCJ0Ijoi0KLQtdC60YHRgiJ9LCJuIjoi0KHQ%0Av9C40YHQvtC60JLQktCUIn1dLCJkIjpbWzE5LG51bGwsWzcxXV1dfSwiT2JqZWN0TmFtZSI6%0AIkRvY1ByaW50IiwiTWV0aG9kTmFtZSI6Ik1hc3NMaXN0IiwiUGFyYW1zIjp7InMiOlt7Im4i%0AOiJPdXRwdXRGaWxlTmFtZSIsInQiOiLQodGC0YDQvtC60LAifSx7Im4iOiJSZXFJZCIsInQi%0AOiLQodGC0YDQvtC60LAifSx7Im4iOiJkc2wiLCJ0Ijoi0KfQuNGB0LvQviDRhtC10LvQvtC1%0AIn0seyJuIjoiVW5zdXBwb3J0ZWRGaWxlSW5mbyIsInQiOiLQm9C%2B0LPQuNGH0LXRgdC60L7Q%0AtSJ9XSwiZCI6WyJPTl9UUk5BQ0xHUk9UXzJCRTk0NzUzZDQzMzRmNDRiZTA5ZTkxOWEwY2E3%0AM2E4ZjYyXzJCRTk2MGQwYzY2MTYzMDExZTM4NGM0MDA1MDU2YjcwZDkwXzJCRWJiMWU4YTli%0AYzdkMTQ1MGJiZGIyMDdjNjgwOGY0MDZhXzBfMjAyMzAzMDdfZDhlNTBhZDQtNjdhNy00YTdk%0ALWI0ZGQtODA4NjhmNDBlMTA3LnBkZiIsIjExMDY5MjcxNTEyNTYyMjUyNzgyIiwiMSIsZmFs%0Ac2VdfX0%3D&protocol=3&id=0&srv=1';
//
//        $response = $document->downloadDocument($downloadRequest);
//        $this->assertNotEmpty($response->content);
    }
}
