<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use JMS\Serializer\Annotation as Serializer;

class DocumentParams
{
    /**
     * @Serializer\SerializedName("Документ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Request\Document")
     */
    public ?Document $documentParam = null;
}
