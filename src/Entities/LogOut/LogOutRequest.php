<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\LogOut;

use MagDv\Sbis\BaseRequest;
use JMS\Serializer\Annotation as Serializer;

class LogOutRequest extends BaseRequest
{
    /**
     * @Serializer\Type("string")
     */
    public string $method = "СБИС.Выход";

    public array $params = [];
}
