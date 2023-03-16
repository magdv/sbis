<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

use JMS\Serializer\Annotation as Serializer;

class Result
{
    /**
     * @var Document[]|null
     * @Serializer\SerializedName("Документ")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\ListOfChanges\Response\Document>")
     */
    public ?array $document = null;

    /**
     * @Serializer\SerializedName("Навигация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Navigation")
     */
    public ?Navigation $navigation = null;
}
