<?php

declare(strict_types=1);

namespace MagDv\Sbis\Interfaces;

use MagDv\Sbis\Entities\Auth\AuthRequest;
use MagDv\Sbis\Entities\Auth\AuthResponse;

interface AuthApiInterface
{
    /**
     * @throws \MagDv\Sbis\Exception\SbisApiException
     */
    public function auth(AuthRequest $request): AuthResponse;
}
