<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Request;

use JMS\Serializer\Annotation as Serializer;

class ListOfChangesParams
{
    /**
     * @Serializer\SerializedName("Фильтр")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Request\ListOfChangesFilter")
     */
    public ?ListOfChangesFilter $filter = null;
}
