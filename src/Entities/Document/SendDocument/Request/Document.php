<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Request;

use JMS\Serializer\Annotation as Serializer;

class Document
{
    /**
     * Id ТрН в Каргомарте
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;
    /**
     * @Serializer\SerializedName("Тип")
     * @Serializer\Type("string")
     */
    public string $type = 'ConsignmentNote';

    /**
     * @Serializer\SerializedName("Регламент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Request\Regulations")
     */
    public ?Regulations $regulations = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\SendDocument\Request\Attachment[]|null
     * @Serializer\SerializedName("Вложение")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Request\Attachment>")
     */
    public ?array $attachments = null;
}
