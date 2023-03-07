<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

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
     * @Serializer\SerializedName("Этап")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Request\Stage")
     */
    public ?Stage $stage = null;
}
