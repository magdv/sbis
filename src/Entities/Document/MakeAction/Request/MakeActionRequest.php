<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use MagDv\Sbis\BaseRequest;
use JMS\Serializer\Annotation as Serializer;

class MakeActionRequest extends BaseRequest
{
    /**
     * @Serializer\Type("string")
     */
    public string $method = 'СБИС.ВыполнитьДействие';

    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Request\DocumentParams")
     */
    public ?DocumentParams $params = null;
}
