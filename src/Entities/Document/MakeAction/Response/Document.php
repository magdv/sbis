<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

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
    public ?string $isDeleted = null;

    /**
     * @var \MagDv\Sbis\Entities\Document\MakeAction\Response\Attachment[]|null
     * @Serializer\SerializedName("Вложение")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\MakeAction\Response\Attachment>")
     */
    public ?array $attachments = null;

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
     * @Serializer\SerializedName("Регламент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\MakeAction\Response\Regulations")
     */
    public ?Regulations $regulations = null;

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
}
