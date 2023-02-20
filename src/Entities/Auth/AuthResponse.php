<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Auth;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;

class AuthResponse extends BaseResponse
{
    /**
     * @Serializer\Type("string")
     */
    public ?string $result = null;
}
