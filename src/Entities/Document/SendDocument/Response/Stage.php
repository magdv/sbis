<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

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
     * @var \MagDv\Sbis\Entities\Document\SendDocument\Response\Action[]|null
     * @Serializer\SerializedName("Действие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Response\Action>")
     */
    public ?array $actions = null;
}
