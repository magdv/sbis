<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;

class Responsible
{
    /**
     * @Serializer\SerializedName("Фамилия")
     * @Serializer\Type("string")
     */
    public ?string $lastName = null;

    /**
     * @Serializer\SerializedName("Имя")
     * @Serializer\Type("string")
     */
    public ?string $firstName = null;

    /**
     * @Serializer\SerializedName("Отчество")
     * @Serializer\Type("string")
     */
    public ?string $secondName = null;

    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $externalId = null;
}
