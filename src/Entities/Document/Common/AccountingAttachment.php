<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

final class AccountingAttachment
{
    /**
     * @Serializer\SerializedName("ВерсияФормата")
     * @Serializer\Type("string")
     */
    public ?string $version = null;

    /**
     * @Serializer\SerializedName("Дата")
     * @Serializer\Type("string")
     */
    public ?string $date = null;

    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;

    /**
     * @Serializer\SerializedName("Номер")
     * @Serializer\Type("string")
     */
    public ?string $number = null;

    /**
     * @Serializer\SerializedName("Подтип")
     * @Serializer\Type("string")
     */
    public ?string $subtype = null;

    /**
     * @Serializer\SerializedName("Сумма")
     * @Serializer\Type("string")
     */
    public ?string $sum = null;

    /**
     * @Serializer\SerializedName("Тип")
     * @Serializer\Type("string")
     */
    public ?string $type = null;

    /**
     * @var File|null
     * @Serializer\SerializedName("Файл")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\File")
     */
    public ?File $file = null;
}
