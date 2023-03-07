<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use JMS\Serializer\Annotation as Serializer;

class File
{
    /**
     * @Serializer\SerializedName("ДвоичныеДанные")
     * @Serializer\Type("string")
     */
    public ?string $data = null;

    /**
     * @Serializer\SerializedName("Имя")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
}
