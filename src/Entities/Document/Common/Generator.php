<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

final class Generator
{
    /**
     * @Serializer\SerializedName("ДатаПринят")
     * @Serializer\Type("string")
     */
    public ?string $date = null;

    /**
     * @Serializer\SerializedName("КодИтога")
     * @Serializer\Type("string")
     */
    public ?string $code = null;
}
