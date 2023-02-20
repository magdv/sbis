<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Auth;

use JMS\Serializer\Annotation as Serializer;

class AuthParam
{
    /**
     * @Serializer\SerializedName("Логин")
     * @Serializer\Type("string")
     */
    public string $login;
    /**
     * @Serializer\SerializedName("Пароль")
     * @Serializer\Type("string")
     */
    public string $password;
    /**
     * @Serializer\SerializedName("НомерАккаунта")
     * @Serializer\Type("string")
     */
    public string $account;
}
