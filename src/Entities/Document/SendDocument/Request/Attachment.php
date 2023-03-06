<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Request;

use JMS\Serializer\Annotation as Serializer;

class Attachment
{
    /**
     * @Serializer\SerializedName("Файл")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Request\File")
     */
    public ?File $file = null;
}
