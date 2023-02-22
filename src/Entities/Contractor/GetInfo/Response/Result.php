<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Response;

use JMS\Serializer\Annotation as Serializer;

class Result
{
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;

    /**
     * @var BoxData[]|null
     * @Serializer\Type("array<MagDv\Sbis\Entities\Contractor\GetInfo\Response\BoxData>")
     */
    public ?array $boxes = null;

    /**
     * @Serializer\SerializedName("СвЮЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Response\UlMember")
     */
    public ?UlMember $member = null;
}
