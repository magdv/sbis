<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;

class Key
{
    /**
     * @Serializer\SerializedName("Активирован")
     * @Serializer\Type("string")
     */
    public ?string $isActive = null;

    /**
     * @Serializer\SerializedName("СпособАктивации")
     * @Serializer\Type("string")
     */
    public ?string $activateMethod = null;

    /**
     * @Serializer\SerializedName("Тип")
     * @Serializer\Type("string")
     */
    public ?string $type = null;
}
