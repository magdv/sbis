<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Event
{
    /**
     * @var Attachment[]|null
     * @Serializer\SerializedName("Вложение")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Attachment>")
     */
    public ?array $attachment = null;

    /**
     * @Serializer\SerializedName("ДатаВремя")
     * @Serializer\Type("string")
     */
    public ?string $dateTime = null;

    /**
     * @Serializer\SerializedName("ДатаВремяДокумента")
     * @Serializer\Type("string")
     */
    public ?string $documentDateTime = null;

    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

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
     * @var ChangesAction|null
     * @Serializer\SerializedName("Действие")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\ChangesAction")
     */
    public ?ChangesAction $action = null;
}
