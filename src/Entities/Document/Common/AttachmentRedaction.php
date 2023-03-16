<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class AttachmentRedaction
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
