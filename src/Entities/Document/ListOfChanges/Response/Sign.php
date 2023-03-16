<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

use JMS\Serializer\Annotation as Serializer;

class Sign
{
    /**
     * @Serializer\SerializedName("Подпись")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\File")
     */
    public ?File $file = null;
}
