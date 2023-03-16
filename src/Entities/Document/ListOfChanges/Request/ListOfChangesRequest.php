<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Request;

use MagDv\Sbis\BaseRequest;
use JMS\Serializer\Annotation as Serializer;

final class ListOfChangesRequest extends BaseRequest
{
    /**
     * @Serializer\Type("string")
     */
    public string $method = 'СБИС.СписокИзменений';

    /**
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesParams")
     */
    public ?ListOfChangesParams $params = null;
}
