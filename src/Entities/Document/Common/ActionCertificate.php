<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class ActionCertificate
{
    /**
     * @Serializer\SerializedName("ДвоичныеДанные")
     * @Serializer\Type("string")
     */
    public ?string $data = null;

    /**
     * @Serializer\SerializedName("ДействителенПо")
     * @Serializer\Type("string")
     */
    public ?string $activeTo = null;

    /**
     * @Serializer\SerializedName("ДействителенС")
     * @Serializer\Type("string")
     */
    public ?string $activeFrom = null;

    /**
     * @Serializer\SerializedName("Должность")
     * @Serializer\Type("string")
     */
    public ?string $position = null;

    /**
     * @Serializer\SerializedName("ИНН")
     * @Serializer\Type("string")
     */
    public ?string $inn = null;

    /**
     * @Serializer\SerializedName("КодСтраны")
     * @Serializer\Type("string")
     */
    public ?string $countryCode = null;
    /**
     * @Serializer\SerializedName("Издатель")
     * @Serializer\Type("string")
     */
    public ?string $publisher = null;
    /**
     * @Serializer\SerializedName("Квалифицированный")
     * @Serializer\Type("string")
     */
    public ?string $isQualified = null;
    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
    /**
     * @Serializer\SerializedName("Отпечаток")
     * @Serializer\Type("string")
     */
    public ?string $fingerPrint = null;
    /**
     * @Serializer\SerializedName("СерийныйНомер")
     * @Serializer\Type("string")
     */
    public ?string $serialNumber = null;
    /**
     * @Serializer\SerializedName("ФИО")
     * @Serializer\Type("string")
     */
    public ?string $fio = null;

    /**
     * @var Key|null
     * @Serializer\SerializedName("Ключ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Key")
     */
    public ?Key $key = null;
}
