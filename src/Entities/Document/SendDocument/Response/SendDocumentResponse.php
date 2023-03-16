<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;
use MagDv\Sbis\Entities\Document\Common\Document;

class SendDocumentResponse extends BaseResponse
{
    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Document")
     */
    public ?Document $result = null;
}
