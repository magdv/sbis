<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\LogOut;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;

class LogOutResponse extends BaseResponse
{
    /**
     * @Serializer\Type("string")
     */
    public ?string $result = null;
}
