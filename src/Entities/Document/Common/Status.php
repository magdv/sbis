<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Status
{
    /**
     * @Serializer\SerializedName("Код")
     * @Serializer\Type("string")
     */
    public ?string $code = null;
    /**
     * @Serializer\SerializedName("Описание")
     * @Serializer\Type("string")
     */
    public ?string $description = null;
    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
    /**
     * @Serializer\SerializedName("Примечание")
     * @Serializer\Type("string")
     */
    public ?string $note = null;
    /**
     * @Serializer\SerializedName("Комментарий")
     * @Serializer\Type("string")
     */
    public ?string $comment = null;
    /**
     * @Serializer\SerializedName("НеполнаяОбработка")
     * @Serializer\Type("string")
     */
    public ?string $isNotFull = null;
    /**
     * @Serializer\SerializedName("Сложное")
     * @Serializer\Type("string")
     */
    public ?string $isComplex = null;
}
