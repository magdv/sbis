<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Request;

use JMS\Serializer\Annotation as Serializer;

class GetInfoParams
{
    /**
     * @Serializer\SerializedName("Участник")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Request\MemberParam")
     */
    public ?MemberParam $memberParam = null;
}
