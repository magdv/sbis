<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

use JMS\Serializer\Annotation as Serializer;

class Result
{
    /**
     * @var \MagDv\Sbis\Entities\Document\MakeAction\Response\Document[]|null
     * @Serializer\SerializedName("Документ")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\MakeAction\Response\Document>")
     */
    public ?array $documents = null;

    /**
     * @Serializer\SerializedName("Навигация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Navigation")
     */
    public ?Navigation $navigation = null;

    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @Serializer\SerializedName("ИдентификаторСеанса")
     * @Serializer\Type("string")
     */
    public ?string $sessionId = null;


    /**
     * @Serializer\SerializedName("Контрагент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Organization")
     */
    public ?Organization $contragent = null;

    /**
     * @Serializer\SerializedName("НашаОрганизация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Organization")
     */
    public ?Organization $ourOrganization = null;

    /**
     * @Serializer\SerializedName("Ответственный")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Responsible")
     */
    public ?Responsible $responsible = null;

    /**
     * @Serializer\SerializedName("Подразделение")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Branch")
     */
    public ?Branch $branch = null;

    /**
     * @Serializer\SerializedName("Подтип")
     * @Serializer\Type("string")
     */
    public ?string $subtype = null;

    /**
     * @Serializer\SerializedName("Примечание")
     * @Serializer\Type("string")
     */
    public ?string $note = null;

    /**
     * @var ResultRedaction[]|null
     * @Serializer\SerializedName("Редакция")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\MakeAction\Response\ResultRedaction>")
     */
    public ?array $redactions = null;

    /**
     * @var Status|null
     * @Serializer\SerializedName("Состояние")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Status")
     */
    public ?Status $status = null;

    /**
     * @Serializer\SerializedName("СсылкаДляКонтрагент")
     * @Serializer\Type("string")
     */
    public ?string $contragentUrl = null;

    /**
     * @Serializer\SerializedName("СсылкаДляНашаОрганизация")
     * @Serializer\Type("string")
     */
    public ?string $ourCompanyUrl = null;

    /**
     * @Serializer\SerializedName("Тип")
     * @Serializer\Type("string")
     */
    public ?string $type = null;
}
