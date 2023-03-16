<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

final class Extension
{
    /**
     * @Serializer\SerializedName("ЗакрытОтИзменений")
     * @Serializer\Type("string")
     */
    public ?string $isClosed = null;

    /**
     * @Serializer\SerializedName("ОтметкаПлюсом")
     * @Serializer\Type("string")
     */
    public ?string $isPlus = null;

    /**
     * @var Mark|null
     * @Serializer\SerializedName("СостояниеМарк")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Mark")
     */
    public ?Mark $mark = null;
}
