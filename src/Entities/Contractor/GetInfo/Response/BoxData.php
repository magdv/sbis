<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Response;

use JMS\Serializer\Annotation as Serializer;

class BoxData
{
    /**
     * @Serializer\SerializedName("ИдентификаторУчастника")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @Serializer\SerializedName("Комментарий")
     * @Serializer\Type("string")
     */
    public ?string $comment = null;

    /**
     * @Serializer\SerializedName("Основной")
     * @Serializer\Type("string")
     */
    public ?string $main = null;

    /**
     * @Serializer\SerializedName("Роуминг")
     * @Serializer\Type("string")
     */
    public ?string $roaming = null;

    /**
     * @Serializer\SerializedName("Оператор")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Response\Operator")
     */
    public ?Operator $operator = null;

    /**
     * @Serializer\SerializedName("СостояниеПодключения")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Response\Status")
     */
    public ?Status $status = null;
}
