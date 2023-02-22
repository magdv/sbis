<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Request;

use MagDv\Sbis\BaseRequest;
use JMS\Serializer\Annotation as Serializer;

class GetInfoRequest extends BaseRequest
{
    /**
     * @Serializer\Type("string")
     */
    public string $method = 'СБИС.ИнформацияОКонтрагенте';

    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Request\GetInfoParams")
     */
    public ?GetInfoParams $params = null;
}
