<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Redaction
{
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;
    /**
     * @Serializer\SerializedName("Актуален")
     * @Serializer\Type("string")
     */
    public ?string $isActive = null;
    /**
     * @Serializer\SerializedName("ПримечаниеИС")
     * @Serializer\Type("string")
     */
    public ?string $note = null;
    /**
     * @Serializer\SerializedName("ДатаВремя")
     * @Serializer\Type("string")
     */
    public ?string $dateTime = null;
}
