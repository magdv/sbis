<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Response;

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
     * @Serializer\Type("string")
     */
    public ?string $count = null;
    /**
     * @Serializer\SerializedName("Страница")
     * @Serializer\Type("string")
     */
    public ?string $page = null;
}
