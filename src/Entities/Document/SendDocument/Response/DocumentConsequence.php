<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;

class DocumentConsequence
{
    /**
     * @Serializer\SerializedName("ВидСвязи")
     * @Serializer\Type("string")
     */
    public ?string $type = null;
    /**
     * @Serializer\SerializedName("Сумма")
     * @Serializer\Type("string")
     */
    public ?string $sum = null;
    /**
     * @Serializer\SerializedName("Документ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Document")
     */
    public ?Document $document = null;
}
