<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use JMS\Serializer\Annotation as Serializer;

class Sign
{
    /**
     * @Serializer\SerializedName("Файл")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Request\File")
     */
    public ?File $file = null;
}
