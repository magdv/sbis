<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Auth;

use JMS\Serializer\Annotation as Serializer;

class AuthParams
{
    /**
     * @Serializer\SerializedName("Параметр")
     * @Serializer\Type("MagDv\Sbis\Entities\Auth\AuthParam")
     */
    public AuthParam $param;
}
