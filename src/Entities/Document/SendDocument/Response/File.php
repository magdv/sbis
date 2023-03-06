<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;

class File
{
    /**
     * @Serializer\SerializedName("Ссылка")
     * @Serializer\Type("string")
     */
    public ?string $url = null;

    /**
     * @Serializer\SerializedName("Имя")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
}
