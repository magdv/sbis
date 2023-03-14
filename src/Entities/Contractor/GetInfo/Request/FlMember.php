<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Request;

use JMS\Serializer\Annotation as Serializer;

class FlMember
{
    /**
     * @Serializer\SerializedName("ИНН")
     * @Serializer\Type("string")
     */
    public ?string $inn = null;
    /**
     * @Serializer\SerializedName("ЧастноеЛицо")
     * @Serializer\Type("string")
     */
    public string $individual = 'Да';
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
     * @Serializer\SerializedName("СНИЛС")
     * @Serializer\Type("string")
     */
    public ?string $snils = null;

    /**
     * @Serializer\SerializedName("КодФилиала")
     * @Serializer\Type("string")
     */
    public ?string $branchCode = null;
}
