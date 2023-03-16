<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Stage
{
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;

    /**
     * @Serializer\SerializedName("Служебный")
     * @Serializer\Type("string")
     */
    public ?string $isService = null;

    /**
     * @var Action[]|null
     * @Serializer\SerializedName("Действие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Action>")
     */
    public ?array $actions = null;
}
