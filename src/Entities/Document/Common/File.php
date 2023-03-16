<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class File
{
    /**
     * @Serializer\SerializedName("Имя")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
    /**
     * @Serializer\SerializedName("Ссылка")
     * @Serializer\Type("string")
     */
    public ?string $url = null;
    /**
     * @Serializer\SerializedName("ДвоичныеДанные")
     * @Serializer\Type("string")
     */
    public ?string $data = null;
    /**
     * @Serializer\SerializedName("Хеш")
     * @Serializer\Type("string")
     */
    public ?string $hash = null;
}
