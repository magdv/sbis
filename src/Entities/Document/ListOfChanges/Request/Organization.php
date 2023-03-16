<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\ListOfChanges\Request;

use JMS\Serializer\Annotation as Serializer;

class Organization
{
    /**
     * @Serializer\SerializedName("СвЮЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\ListOfChanges\Request\Ul")
     */
    public ?Ul $ul = null;
}
