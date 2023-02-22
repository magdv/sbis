<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Contractor\GetInfo\Request;

use JMS\Serializer\Annotation as Serializer;

class MemberParam
{
    /**
     * @Serializer\SerializedName("Идентификатор")
     * @Serializer\Type("string")
     */
    public ?string $id = null;
    /**
     * @Serializer\SerializedName("СвЮЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Request\UlMember")
     */
    public ?UlMember $ul = null;
    /**
     * @Serializer\SerializedName("СвФЛ")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Request\FlMember")
     */
    public ?FlMember $fl = null;

    /**
     * @Serializer\Type("string")
     */
    public ?string $GLN = null;

    /**
     * @Serializer\SerializedName("Ответственный")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Request\Responsible")
     */
    public ?Responsible $responsible = null;

    /**
     * @Serializer\SerializedName("Подразделение")
     * @Serializer\Type("MagDv\Sbis\Entities\Contractor\GetInfo\Request\Branch")
     */
    public ?Branch $branch = null;

    /**
     * @Serializer\SerializedName("ДопПоля")
     * @Serializer\Type("string")
     */
    public ?string $extendedFields = null;
}
