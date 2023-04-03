<?php

declare(strict_types=1);

namespace MagDv\Sbis\Interfaces;

use MagDv\Sbis\Entities\Document\Download\Request\DownloadRequest;
use MagDv\Sbis\Entities\Document\Download\Response\DownloadResponse;
use MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesRequest;
use MagDv\Sbis\Entities\Document\ListOfChanges\Response\ListOfChangesResponse;
use MagDv\Sbis\Entities\Document\MakeAction\Request\MakeActionRequest;
use MagDv\Sbis\Entities\Document\MakeAction\Response\MakeActionResponse;
use MagDv\Sbis\Entities\Document\SendDocument\Request\SendDocumentRequest;
use MagDv\Sbis\Entities\Document\SendDocument\Response\SendDocumentResponse;

interface DocumentApiInterface
{
    public function sendDocument(SendDocumentRequest $request): SendDocumentResponse;
    public function makeAction(MakeActionRequest $request): MakeActionResponse;
    public function listOfChanges(ListOfChangesRequest $listOfChangesRequest): ListOfChangesResponse;
    public function downloadDocument(DownloadRequest $downloadRequest): DownloadResponse;
}
