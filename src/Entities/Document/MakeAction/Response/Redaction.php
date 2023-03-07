<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

use JMS\Serializer\Annotation as Serializer;

class Redaction
{
    /**
     * @Serializer\SerializedName("ДатаВремя")
     * @Serializer\Type("string")
     */
    public ?string $dateTime = null;
    /**
     * @Serializer\SerializedName("Номер")
     * @Serializer\Type("string")
     */
    public ?string $number = null;
}
