<?php

declare(strict_types=1);

namespace MagDv\Sbis\Interfaces;

use MagDv\Sbis\Entities\Contractor\GetInfo\Request\GetInfoRequest;
use MagDv\Sbis\Entities\Contractor\GetInfo\Response\GetInfoResponse;

interface ContractorApiInterface
{
    public function getInfo(GetInfoRequest $request): GetInfoResponse;
}
