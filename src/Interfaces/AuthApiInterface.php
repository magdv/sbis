<?php

declare(strict_types=1);

namespace MagDv\Sbis\Interfaces;

use MagDv\Sbis\Entities\Auth\AuthRequest;
use MagDv\Sbis\Entities\Auth\AuthResponse;
use MagDv\Sbis\Entities\LogOut\LogOutRequest;
use MagDv\Sbis\Entities\LogOut\LogOutResponse;

interface AuthApiInterface
{
    /**
     * @throws \MagDv\Sbis\Exception\SbisApiException
     */
    public function auth(AuthRequest $request): AuthResponse;

    /**
     * @throws \MagDv\Sbis\Exception\SbisApiException
     */
    public function logOut(LogOutRequest $request): LogOutResponse;
}
