<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

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
     * @Serializer\SerializedName("Срок")
     * @Serializer\Type("string")
     */
    public ?string $expirationDate = null;

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
     * @Serializer\SerializedName("Удален")
     * @Serializer\Type("string")
     */
    public ?string $isDelete = null;

    /**
     * @Serializer\SerializedName("Подразделение")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Branch")
     */
    public ?Branch $branch = null;

    /**
     * @var Contragent|null
     * @Serializer\SerializedName("Контрагент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Contragent")
     */
    public ?Contragent $contragent = null;

    /**
     * @Serializer\SerializedName("НашаОрганизация")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Organization")
     */
    public ?Organization $ourOrganization = null;

    /**
     * @var Responsible|null
     * @Serializer\SerializedName("Ответственный")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Responsible")
     */
    public ?Responsible $responsible = null;

    /**
     * @var Redaction[] $redaction
     * @Serializer\SerializedName("Редакция")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Redaction>")
     */
    public ?array $redaction = null;

    /**
     * @Serializer\SerializedName("Регламент")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Regulations")
     */
    public ?Regulations $regulations = null;

    /**
     * @Serializer\SerializedName("Автор")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Author")
     */
    public ?Author $author = null;

    /**
     * @var Attachment[]|null
     * @Serializer\SerializedName("Вложение")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Attachment>")
     */
    public ?array $attachments = null;

    /**
     * @var AccountingAttachment[]|null
     * @Serializer\SerializedName("ВложениеУчета")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\AccountingAttachment>")
     */
    public ?array $accountingAttachments = null;


    /**
     * @var Event[] $event
     * @Serializer\SerializedName("Событие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Event>")
     */
    public ?array $event = null;

    /**
     * @var BaseDocuments[]|null $baseDocuments
     * @Serializer\SerializedName("ДокументОснование")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\BaseDocuments>")
     */
    public ?array $baseDocuments = null;

    /**
     * @var BaseDocuments[]|null $resultDocuments
     * @Serializer\SerializedName("ДокументСледствие")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\ResultDocuments>")
     */
    public ?array $resultDocuments = null;

    /**
     * @var Status|null
     * @Serializer\SerializedName("Состояние")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Status")
     */
    public ?Status $status = null;

    /**
     * @var Extension|null
     * @Serializer\SerializedName("Расширение")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Extension")
     */
    public ?Extension $extension = null;

    /**
     * @var Stage[]|null
     * @Serializer\SerializedName("Этап")
     * @Serializer\Type("array<MagDv\Sbis\Entities\Document\Common\Stage>")
     */
    public ?array $stages = null;

    /**
     * @Serializer\SerializedName("ДопПоля")
     * @Serializer\Type("string")
     */
    public ?string $extendedFields = null;
}
