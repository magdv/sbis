<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Request;

use JMS\Serializer\Annotation as Serializer;

class Regulations
{
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public string $id = 'ad40d873-9d1e-47d7-b7e9-f39636b36301';

    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public string $name = 'Транспортная накладная';
}
