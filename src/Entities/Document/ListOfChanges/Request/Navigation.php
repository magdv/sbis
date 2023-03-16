<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Request;

use JMS\Serializer\Annotation as Serializer;

class Navigation
{
    /**
     * @Serializer\SerializedName("РазмерСтраницы")
     * @Serializer\Type("string")
     */
    public ?string $count = null;
}
