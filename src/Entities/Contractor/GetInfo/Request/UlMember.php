<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Request;

use JMS\Serializer\Annotation as Serializer;

class UlMember
{
    /**
     * @Serializer\SerializedName("ИНН")
     * @Serializer\Type("string")
     */
    public ?string $inn = null;

    /**
     * @Serializer\SerializedName("КПП")
     * @Serializer\Type("string")
     */
    public ?string $kpp = null;

    /**
     * @Serializer\SerializedName("КодФилиала")
     * @Serializer\Type("string")
     */
    public ?string $branchCode = null;

    /**
     * @Serializer\SerializedName("КодСтраны")
     * @Serializer\Type("string")
     */
    public ?string $countryCode = null;

    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
}
