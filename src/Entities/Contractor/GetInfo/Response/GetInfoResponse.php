<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Response;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;

class GetInfoResponse extends BaseResponse
{
    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Response\Result")
     */
    public ?Result $result = null;
}
