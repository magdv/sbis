<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;

class MakeActionResponse extends BaseResponse
{
    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Result")
     */
    public ?Result $result = null;
}
