<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

use JMS\Serializer\Annotation as Serializer;

class Organization
{
    /**
     * @Serializer\SerializedName("Email")
     * @Serializer\Type("string")
     */
    public ?string $email = null;

    /**
     * @Serializer\SerializedName("ИдентификаторИС")
     * @Serializer\Type("string")
     */
    public ?string $systemId = null;

    /**
     * @Serializer\SerializedName("Описание")
     * @Serializer\Type("string")
     */
    public ?string $description = null;
    /**
     * @Serializer\SerializedName("Телефон")
     * @Serializer\Type("string")
     */
    public ?string $phone = null;

    /**
     * @Serializer\SerializedName("СвЮЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Ul")
     */
    public ?Ul $ul = null;
}
