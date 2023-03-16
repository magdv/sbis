<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

use JMS\Serializer\Annotation as Serializer;

class Document
{
    /**
     * @Serializer\SerializedName("Дата")
     * @Serializer\Type("string")
     */
    public ?string $date = null;
    /**
     * @Serializer\SerializedName("ДатаВремяСоздания")
     * @Serializer\Type("string")
     */
    public ?string $createDateTime = null;
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

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
     * @Serializer\SerializedName("Примечание")
     * @Serializer\Type("string")
     */
    public ?string $note = null;

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
     * @Serializer\SerializedName("СсылкаНаPDF")
     * @Serializer\Type("string")
     */
    public ?string $pdfUrl = null;

    /**
     * @Serializer\SerializedName("СсылкаНаАрхив")
     * @Serializer\Type("string")
     */
    public ?string $archiveUrl = null;

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
     * @var Contragent|null
     * @Serializer\SerializedName("Контрагент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Contragent")
     */
    public ?Contragent $contragent = null;

    /**
     * @var Contragent|null
     * @Serializer\SerializedName("НашаОрганизация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Contragent")
     */
    public ?Contragent $ourOrganization = null;

    /**
     * @var Responsible|null
     * @Serializer\SerializedName("Ответственный")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Responsible")
     */
    public ?Responsible $responsible = null;

    /**
     * @var Redaction[] $redaction
     * @Serializer\SerializedName("Редакция")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\ListOfChanges\Response\Redaction>")
     */
    public ?array $redaction = null;
    /**
     * @var Event[] $event
     * @Serializer\SerializedName("Событие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\ListOfChanges\Response\Event>")
     */
    public ?array $event = null;
    /**
     * @var Status|null
     * @Serializer\SerializedName("Состояние")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Response\Status")
     */
    public ?Status $status = null;
}
