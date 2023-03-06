<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;

class SendDocumentResponse extends BaseResponse
{
    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Result")
     */
    public ?Result $result = null;
}
