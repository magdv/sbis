<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\MakeAction\Response;

use JMS\Serializer\Annotation as Serializer;

class Navigation
{
    /**
     * @Serializer\SerializedName("ЕстьЕще")
     * @Serializer\Type("string")
     */
    public ?string $more = null;

    /**
     * @Serializer\SerializedName("РазмерСтраницы")
     * @Serializer\Type("integer")
     */
    public ?int $count = null;

    /**
     * @Serializer\SerializedName("Страница")
     * @Serializer\Type("integer")
     */
    public ?int $page = null;
}
