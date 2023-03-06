<?php

declare(strict_types=1);

namespace Test\Functional;

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
        $client = $this->getApiClient();

        $apiFactory = $client->getApi();

        $document = $apiFactory->getDocument();

        $request = new SendDocumentRequest();
        $request->params = new DocumentParams();
        $request->params->documentParam = new Document();
        $request->params->documentParam->id = '111111';
        $request->params->documentParam->regulations = new Regulations();

        $attachment = new Attachment();
        $attachment->file = new File();
        $attachment->file->name = 'ON_TRNACLPPRIN_20230213_0ae401de-740c-4b04-a80e-065b4c39a42a.xml';
        $attachment->file->data = 'D94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iV0lORE9XUy0xMjUxIiA/Pg0KPNTg6esg\nwuXw8c/w7uM9ItHByNEzIiDC5fDx1O7w7D0iNS4wMSIgyOTU4OnrPSJPTl9UUk5BQ0xQUFJJ\nTl9fX18wXzIwMjMwMjEzX0dVSUQiPg0KDQogIDzE7urz7OXt8iDC8Mjt9M/w4s/w6OXsPSIx\nMToxODoyMyIgxODyyO30z/Diz/Do5ew9IjEzLjAyLjIwMjMiIMrNxD0iMTExMDM0MCIgz+7U\n4Ory1cY9ItLw4O3x7+7w8u3g/yDt4Orr4OTt4P8sIOjt9O7w7OD26P8g7+Xw5eLu5/fo6uAg\n7iDv8Ojl7OUg4/Dz5+AiPg0KICAgIDzI5Mjt9MPOLz4NCiAgICA80e7kyO30z/Diz/Do5ewg\n0e7kzu/l8D0iw/Dz5yDv8Ojt//Ig6iDv5fDl4u7n6uUg4u7k6PLl6+XsLCDz7+7r7e7s7vfl\n7e377CDv5fDl4u7n9+jq7uwg7eAg7+Xw5eLu5+rzIOPw8+fgLCDu8iDr6PbgLCDu8fP55fHy\n4uji+OXj7iDv7uPw8+fq8yDj8PPn4CDiIPLw4O3x7+7w8u3u5SDx8OXk8fLi7iI+DQogICAg\nICA8x+Dsz/Diz/Do5ewgx+DsxODywvDP7vHP8Ojl7D0iMTMuMDIuMjAyM1QxMjowMDowMCsw\nMDowMCIgx+DsxODywvDP8OjhPSIxMy4wMi4yMDIzVDEwOjAwOjAwKzAwOjAwIiDH4OzE4PLC\n8NPh+/I9IjEzLjAyLjIwMjNUMjA6MDA6MDArMDA6MDAiIMfg7Mru68zl8fI9Iuzl8fIg7O3u\n4+4iIMfg7Mzg8fE9Iuzg8fHgIOPw8+fgIiDH4OzP7uPw0ODhPSLv8O7i5eTl7ej/IO/u4/Dz\n5+737fv1IPDg4e7yIiDH4OzR7vHyw/Dz5z0i8e7x8u7/7ejlIOPw8+fgIO7y6+j37e7lIiDN\n4OvK7u7w0u73wvDP8OE9IjAiIM3g68ru7vDS7vfC8M/w7D0iMCIgzeDryu7u8NLu98Lw0+E9\nIjAiPg0KICAgICAgICA8yO30z+7rIMjk1ODp68jt9M/u6z0iYWMzZTVjYTQtOGM4My00MGIw\nLTgxN2EtZjBiMDQ2ZThhNDIwIj4NCiAgICAgICAgICA80uXq8fLI7fQgx+3g9+Xt6OU9Isft\n4Pfl7ejlIiDI5OXt8uj0PSLI5OXt8uj06Org8u7wIi8+DQogICAgICAgIDwvyO30z+7rPg0K\nICAgICAgPC/H4OzP8OLP8Ojl7D4NCiAgICAgIDzO8uzl8s/w4s/w6OXsIMTg8sLwzvLs5fI9\nIjEzLjAyLjIwMjNUMjA6MDA6MDArMDA6MDAiIM3g68ru7vDS7vfC8M7y7D0iMCIgzuHx8s7y\n7OXyPSLO7+jx4O3o5SDu4fHy7v/y5ev88fLiLCDv7vHr8+bo4vjo9SDu8e3u4uDt6OXsIOTr\n/yDu8uzl8uroINLKIDEiIM7y7MDq8sLn4j0izvLs5fLq6CDiIO7y7e745e3o6CDg6vLgIOLn\n4uX46OLg7ej/Ij4NCiAgICAgICAgPNHiwOryIMTg8uDE7uo9IjEzLjAyLjIwMjMiIMTu79Hi\n5eTE7uo9IsTu7+7r7ejl8uv87fvlIPHi5eTl7ej/IiDI5MTu6j0iMTEiIM3g6OzE7uo9IsDq\n8iIgze7s5fDE7uo9IjEiPg0KICAgICAgICAgIDzI5NDl6tHu8fI+DQogICAgICAgICAgICA8\nxODt7cjt7iDI5NHy4PI9It7LIiDI5OXt8uj0PSLI5OXt8uj06Org8u7wIiDI7fvl0eLl5D0i\nyO375SDx4uXk5e3o/yIgzeDo7D0izs7OIMrg5+D18fLg7SIg0fLw4O09Isrg5+D18fLg7SIv\nPg0KICAgICAgICAgIDwvyOTQ5erR7vHyPg0KICAgICAgICA8L9HiwOryPg0KICAgICAgICA8\n0ODn7Njy8CDE4PLgyvPw8cLg6z0iMTMuMDIuMjAyMyIgyPLu49Dg5+zY8vDI7T0iMTIzLjQ1\nIiDI8u7j0ODn7Njy8NDUPSIxMjMuNDUiIMru5M7Kwj0iNjQzIiDK8/DxwuDrPSI1MCIgzeDo\n7M7Kwj0i0O7x8ejp8ero6SDw8+Hr/CIg0ODx99jy8D0i0ODx9+XyIPjy8OD04CIg1ODq8sru\n68XkyOfsPSLU4Ory6Pfl8eru5SDq7uvo9+Xx8uLuIOXk6O3o9iDo5+zl8OXt6P8g5Ov/IPDg\n8ffl8uAg+PLw4PTgICIvPg0KICAgICAgICA8yO30z+7rIMjk1ODp68jt9M/u6z0iYWMzZTVj\nYTQtOGM4My00MGIwLTgxN2EtZjBiMDQ2ZThhNDIwIj4NCiAgICAgICAgICA80uXq8fLI7fQg\nx+3g9+Xt6OU9Isft4Pfl7ejlIiDI5OXt8uj0PSLI5OXt8uj06Org8u7wIi8+DQogICAgICAg\nIDwvyO30z+7rPg0KICAgICAgPC/O8uzl8s/w4s/w6OXsPg0KICAgICAgPMjt9M/u6yDI5NTg\n6evI7fTP7us9ImFjM2U1Y2E0LThjODMtNDBiMC04MTdhLWYwYjA0NmU4YTQyMCI+DQogICAg\nICAgIDzS5erx8sjt9CDH7eD35e3o5T0ix+3g9+Xt6OUiIMjk5e3y6PQ9Isjk5e3y6PTo6uDy\n7vAiLz4NCiAgICAgIDwvyO30z+7rPg0KICAgIDwv0e7kyO30z/Diz/Do5ew+DQogICAgPM/u\n5O/o8eDt8iDR8uDyz+7k7z0iMSI+DQogICAgICA81MjOLz4NCiAgICA8L8/u5O/o8eDt8j4N\nCiAgPC/E7urz7OXt8j4NCg0KPC/U4OnrPg0K';

        $request->params->documentParam->attachments[] = $attachment;

        $response = $document->sendDocument($request);

        $this->assertTrue($response->isOk());
        $this->assertEquals('111111', $response->result->id);
        $this->assertEquals('Исходящий', $response->result->direction);
        $this->assertEquals('ConsignmentNote', $response->result->type);
    }
}
