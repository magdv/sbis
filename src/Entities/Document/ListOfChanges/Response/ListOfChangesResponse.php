<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\BaseResponse;

class ListOfChangesResponse extends BaseResponse
{
    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Result")
     */
    public ?Result $result = null;
}
