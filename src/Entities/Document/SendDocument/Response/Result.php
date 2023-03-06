<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\SendDocument\Response;

use JMS\Serializer\Annotation as Serializer;

class Result
{
    /**
     * @Serializer\SerializedName("Автор")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Author")
     */
    public ?Author $author = null;

    /**
     * @var Attachment[]|null
     * @Serializer\SerializedName("Вложение")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Response\Attachment>")
     */
    public ?array $attachments = null;

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
     * @var DocumentConsequence[]|null
     * @Serializer\SerializedName("ДокументСледствие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Response\DocumentConsequence>")
     */
    public ?array $documentConsequence = null;

    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @Serializer\SerializedName("Контрагент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Organization")
     */
    public ?Organization $contragent = null;

    /**
     * @Serializer\SerializedName("НашаОрганизация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Organization")
     */
    public ?Organization $ourOrganization = null;

    /**
     * @Serializer\SerializedName("Ответственный")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Responsible")
     */
    public ?Responsible $responsible = null;

    /**
     * @Serializer\SerializedName("Примечание")
     * @Serializer\Type("string")
     */
    public ?string $note = null;

    /**
     * @Serializer\SerializedName("Регламент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Regulations")
     */
    public ?Regulations $regulations = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\SendDocument\Response\ResultRedaction[]|null
     * @Serializer\SerializedName("Редакция")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Response\ResultRedaction>")
     */
    public ?array $redactions = null;

    /**
     * @var Status|null
     * @Serializer\SerializedName("Состояние")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\SendDocument\Response\Status")
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
    public ?string $isDeleted = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\SendDocument\Response\Stage[]|null
     * @Serializer\SerializedName("Этап")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\SendDocument\Response\Stage>")
     */
    public ?array $stages = null;
}
