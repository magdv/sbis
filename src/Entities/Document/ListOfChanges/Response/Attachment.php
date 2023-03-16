<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

use JMS\Serializer\Annotation as Serializer;

class Attachment
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
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;
    /**
     * @Serializer\SerializedName("Модифицирован")
     * @Serializer\Type("string")
     */
    public ?string $isModify = null;
    /**
     * @Serializer\SerializedName("Название")
     * @Serializer\Type("string")
     */
    public ?string $name = null;
    /**
     * @Serializer\SerializedName("Направление")
     * @Serializer\Type("string")
     */
    public ?string $direction = null;
    /**
     * @Serializer\SerializedName("Номер")
     * @Serializer\Type("string")
     */
    public ?string $number = null;

    /**
     * @var Sign[] $sign
     * @Serializer\SerializedName("Подпись")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\ListOfChanges\Response\Sign>")
     */
    public ?array $sign = null;
    /**
     * @Serializer\SerializedName("Подтип")
     * @Serializer\Type("string")
     */
    public ?string $subtype = null;

    /**
     * @Serializer\SerializedName("Служебный")
     * @Serializer\Type("string")
     */
    public ?string $isService = null;
    /**
     * @Serializer\SerializedName("СсылкаНаHTML")
     * @Serializer\Type("string")
     */
    public ?string $htmlUrl = null;

    /**
     * @Serializer\SerializedName("СсылкаНаPDF")
     * @Serializer\Type("string")
     */
    public ?string $pdfUrl = null;

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
     * @Serializer\SerializedName("Удален")
     * @Serializer\Type("string")
     */
    public ?string $isDelete = null;


    /**
     * @Serializer\SerializedName("УдаленКонтрагентом")
     * @Serializer\Type("string")
     */
    public ?string $isDeletedByContragent = null;

    /**
     * @Serializer\SerializedName("Зашифрован")
     * @Serializer\Type("string")
     */
    public ?string $isEncrypt = null;


    /**
     * @Serializer\SerializedName("ТипШифрования")
     * @Serializer\Type("string")
     */
    public ?string $encryptionType = null;

    /**
     * @var File|null
     * @Serializer\SerializedName("Файл")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\File")
     */
    public ?File $file = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\ListOfChanges\Response\Redaction|null
     * @Serializer\SerializedName("Редакция")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Redaction")
     */
    public ?Redaction $redaction = null;
}
