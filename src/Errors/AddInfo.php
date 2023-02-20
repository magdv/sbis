<?php

declare(strict_types=1);

namespace MagDv\Sbis\Errors;

use JMS\Serializer\Annotation as Serializer;

class AddInfo
{
    /**
     * @Serializer\SerializedName("Сообщение")
     * @Serializer\Type("string")
     */
    public ?string $message = null;

    /**
     * @Serializer\SerializedName("Телефон")
     * @Serializer\Type("string")
     */
    public ?string $phone = null;

    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @Serializer\SerializedName("МетодОтправкиКодаПодтверждения")
     * @Serializer\Type("string")
     */
    public ?string $submitMethod = null;

    /**
     * @Serializer\SerializedName("МетодПроверкиКодаИсключения")
     * @Serializer\Type("string")
     */
    public ?string $checkMethod = null;

    /**
     * @Serializer\SerializedName("ИдентификаторСессии")
     * @Serializer\Type("string")
     */
    public ?string $sessionId = null;
}
