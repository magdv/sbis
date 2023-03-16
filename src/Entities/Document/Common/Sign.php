<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Common;

use JMS\Serializer\Annotation as Serializer;

class Sign
{
    /**
     * @var Certificate|null
     * @Serializer\SerializedName("Сертификат")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\Certificate")
     */
    public ?Certificate $certificate = null;

    /**
     * @Serializer\SerializedName("Файл")
     * @Serializer\Type("MagDv\Sbis\Entities\Document\Common\File")
     */
    public ?File $file = null;
}
