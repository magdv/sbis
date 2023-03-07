<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use JMS\Serializer\Annotation as Serializer;

class Stage
{
    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public string $name = 'Отправка';

    /**
     * @var \MagDv\Sbis\Entities\Document\MakeAction\Request\Attachment[]|null
     * @Serializer\SerializedName("Вложение")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\MakeAction\Request\Attachment>")
     */
    public ?array $attachments = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\MakeAction\Request\Action[]|null
     * @Serializer\SerializedName("Действие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\MakeAction\Request\Action>")
     */
    public ?array $actions = null;
}
