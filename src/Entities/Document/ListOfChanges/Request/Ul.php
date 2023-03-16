<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Request;

use JMS\Serializer\Annotation as Serializer;

final class Ul
{
    /**
     * @Serializer\SerializedName("ИНН")
     * @Serializer\Type("string")
     */
    public ?string $inn = null;
    /**
     * @Serializer\SerializedName("КПП")
     * @Serializer\Type("string")
     */
    public ?string $kpp = null;
}
