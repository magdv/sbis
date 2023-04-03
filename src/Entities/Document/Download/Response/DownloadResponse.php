<?php

declare(strict_types=1);

namespace MagDv\Sbis\Entities\Document\Download\Response;

use MagDv\Sbis\BaseResponse;

final class DownloadResponse extends BaseResponse
{
    public ?string $content = null;
}
