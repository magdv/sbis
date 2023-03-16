<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Fl
{
    /**
     * @Serializer\SerializedName("ИНН")
     * @Serializer\Type("string")
     */
    public ?string $inn = null;

    /**
     * @Serializer\SerializedName("КодФилиала")
     * @Serializer\Type("string")
     */
    public ?string $branchCode = null;

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
}
