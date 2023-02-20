<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Auth;

use MagDv\Sbis\BaseRequest;
use JMS\Serializer\Annotation as Serializer;

class AuthRequest extends BaseRequest
{
    /**
     * @Serializer\Type("string")
     */
    public string $method = "СБИС.Аутентифицировать";

    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Auth\AuthParams")
     */
    public AuthParams $params;
}
