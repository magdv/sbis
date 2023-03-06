<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;

class Action
{
    /**
     * @Serializer\SerializedName("Комментарий")
     * @Serializer\Type("string")
     */
    public ?string $comment = null;

    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;

    /**
     * @Serializer\SerializedName("ТребуетКомментария")
     * @Serializer\Type("string")
     */
    public ?string $needComment = null;

    /**
     * @Serializer\SerializedName("ТребуетПодписания")
     * @Serializer\Type("string")
     */
    public ?string $needSign = null;

    /**
     * @Serializer\SerializedName("ТребуетРасшифровки")
     * @Serializer\Type("string")
     */
    public ?string $needDecode = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\SendDocument\Response\Certificate[]|null
     * @Serializer\SerializedName("Сертификат")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Response\Certificate>")
     */
    public ?array $certificates = null;
}
