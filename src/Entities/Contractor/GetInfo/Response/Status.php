<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Response;

use JMS\Serializer\Annotation as Serializer;

class Status
{
    /**
     * @Serializer\SerializedName("Код")
     * @Serializer\Type("string")
     */
    public ?string $code = null;

    /**
     * @Serializer\SerializedName("Описание")
     * @Serializer\Type("string")
     */
    public ?string $description = null;
}
