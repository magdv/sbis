<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

final class Mark
{
    /**
     * @Serializer\SerializedName("КодОперации")
     * @Serializer\Type("string")
     */
    public ?string $operationCode = null;

    /**
     * @Serializer\SerializedName("КодСостоянияОперации")
     * @Serializer\Type("string")
     */
    public ?string $operationStatusCode = null;

    /**
     * @Serializer\SerializedName("Операция")
     * @Serializer\Type("string")
     */
    public ?string $operation = null;

    /**
     * @Serializer\SerializedName("СостояниеОперации")
     * @Serializer\Type("string")
     */
    public ?string $operationStatus = null;
}
