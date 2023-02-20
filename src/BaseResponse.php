<?php

declare(strict_types=1);

namespace MagDv\Sbis;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\Errors\Error;

class BaseResponse
{
    /**
     * @Serializer\Type("int")
     */
    public ?int $statusCode = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $jsonrpc = null;

    /**
     * @Serializer\Type("MagDv\Sbis\Errors\Error")
     */
    public ?Error $error = null;

    public function isOk(): bool
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }
}
