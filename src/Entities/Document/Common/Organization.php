<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Organization
{
    /**
     * @Serializer\SerializedName("СвЮЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Ul")
     */
    public ?Ul $ul = null;

    /**
     * @Serializer\SerializedName("СвФЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Fl")
     */
    public ?Fl $fl = null;
}
