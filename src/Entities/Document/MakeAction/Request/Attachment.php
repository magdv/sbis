<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use JMS\Serializer\Annotation as Serializer;

class Attachment
{
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\MakeAction\Request\Sign[]|null
     * @Serializer\SerializedName("Подпись")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\MakeAction\Request\Sign>")
     */
    public ?array $sign = null;
}
