<?php

declare(strict_types=1);

namespace MagDv\Sbis\Errors;

use JMS\Serializer\Annotation as Serializer;

class Error
{
    /**
     * @Serializer\Type("string")
     */
    public ?string $code = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $message = null;

    /**
     * @Serializer\Type("string")
     * @var null|string
     */
    public ?string $details;

    /**
     * @Serializer\Type("string")
     * @var null|string
     */
    public ?string $type;

    /**
     * @Serializer\Type("MagDv\Sbis\Errors\ErrorData")
     */
    public ?ErrorData $data = null;
}
