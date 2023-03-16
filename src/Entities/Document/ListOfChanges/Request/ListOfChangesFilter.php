<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Request;

use JMS\Serializer\Annotation as Serializer;

final class ListOfChangesFilter
{
    /**
     * @Serializer\SerializedName("ИдентификаторСобытия")
     * @Serializer\Type("string")
     */
    public ?string $id = null;
    /**
     * @Serializer\SerializedName("ДатаВремяС")
     * @Serializer\Type("string")
     */
    public ?string $dateTimeFrom = null;
    /**
     * @Serializer\SerializedName("ДатаВремяПо")
     * @Serializer\Type("string")
     */
    public ?string $dateTimeTo = null;
    /**
     * @Serializer\SerializedName("Тип")
     * @Serializer\Type("string")
     */
    public ?string $type = null;
    /**
     * @Serializer\SerializedName("Подтип")
     * @Serializer\Type("string")
     */
    public ?string $subType = null;

    /**
     * @Serializer\SerializedName("ПолныйСертификатЭП")
     * @Serializer\Type("string")
     */
    public string $isFullCertificate = 'Нет';

    /**
     * @Serializer\SerializedName("НашаОрганизация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Request\Organization")
     */
    public ?Organization $organization = null;

    /**
     * @Serializer\SerializedName("Навигация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Request\Navigation")
     */
    public ?Navigation $navigation = null;
}
