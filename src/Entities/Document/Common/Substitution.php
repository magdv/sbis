<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

final class Substitution
{
    /**
     * @var Generator[] $sign
     * @Serializer\SerializedName("Генератор")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Generator>")
     */
    public ?array $generator = null;
}
