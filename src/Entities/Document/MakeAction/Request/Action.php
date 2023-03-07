<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Request;

use JMS\Serializer\Annotation as Serializer;

class Action
{
    /**
     * @Serializer\SerializedName("Комментарий")
     * @Serializer\Type("string")
     */
    public string $comment = '';

    /**
     * @var \MagDv\Sbis\Entities\Document\MakeAction\Request\Sign[]|null
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public string $name = 'Погружен';
}
