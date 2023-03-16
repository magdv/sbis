<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

use JMS\Serializer\Annotation as Serializer;
use MagDv\Sbis\Entities\Document\Common\Navigation;

class Result
{
    /**
     * @var \MagDv\Sbis\Entities\Document\Common\Document[]|null
     * @Serializer\SerializedName("Документ")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Document>")
     */
    public ?array $document = null;

    /**
     * @Serializer\SerializedName("Навигация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Navigation")
     */
    public ?Navigation $navigation = null;
}
