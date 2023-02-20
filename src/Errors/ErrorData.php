<?php

declare(strict_types=1);

namespace MagDv\Sbis\Errors;

use JMS\Serializer\Annotation as Serializer;

class ErrorData
{
    /**
     * @Serializer\Type("string")
     */
    public ?string $classid = null;

    /**
     * @Serializer\Type("MagDv\Sbis\Errors\AddInfo")
     */
    public ?AddInfo $addinfo = null;
}
