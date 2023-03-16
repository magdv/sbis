<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

final class ResultDocuments
{
    /**
     * @Serializer\SerializedName("Документ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\ResultDocument")
     */
    public ?ResultDocument $document = null;

    /**
     * @Serializer\SerializedName("ВидСвязи")
     * @Serializer\Type("string")
     */
    public ?string $type = null;

    /**
     * @Serializer\SerializedName("Сумма")
     * @Serializer\Type("string")
     */
    public ?string $summ = null;
}
