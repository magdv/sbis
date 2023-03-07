<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

use JMS\Serializer\Annotation as Serializer;

class Ul
{
    /**
     * @Serializer\SerializedName("АдресЮридический")
     * @Serializer\Type("string")
     */
    public ?string $address = null;
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
     * @Serializer\SerializedName("КодСтраны")
     * @Serializer\Type("int")
     */
    public ?int $countryCode = null;
    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
    /**
     * @Serializer\SerializedName("НазваниеПолное")
     * @Serializer\Type("string")
     */
    public ?string $fullName = null;
}
