<?php

declare(strict_types=1);

namespace MagDv\Sbis\Interfaces;

use MagDv\Sbis\Entities\Document\MakeAction\Request\MakeActionRequest;
use MagDv\Sbis\Entities\Document\MakeAction\Response\MakeActionResponse;
use MagDv\Sbis\Entities\Document\SendDocument\Request\SendDocumentRequest;
use MagDv\Sbis\Entities\Document\SendDocument\Response\SendDocumentResponse;

interface DocumentApiInterface
{
    public function sendDocument(SendDocumentRequest $request): SendDocumentResponse;
    public function makeAction(MakeActionRequest $request): MakeActionResponse;
}
