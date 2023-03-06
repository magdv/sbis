<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Request;

use MagDv\Sbis\BaseRequest;
use JMS\Serializer\Annotation as Serializer;

class SendDocumentRequest extends BaseRequest
{
    /**
     * @Serializer\Type("string")
     */
    public string $method = 'СБИС.ЗаписатьДокумент';

    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Request\DocumentParams")
     */
    public ?DocumentParams $params = null;
}
