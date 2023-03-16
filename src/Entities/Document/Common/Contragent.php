<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Contragent
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
    public ?string $id = null;

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
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\ContragentUl")
     */
    public ?ContragentUl $ul = null;

    /**
     * @Serializer\SerializedName("СвФЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\ContragentFl")
     */
    public ?ContragentFl $fl = null;
}
