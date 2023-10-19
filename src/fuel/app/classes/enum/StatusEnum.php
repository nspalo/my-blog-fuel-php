<?php

declare(strict_types=1);

namespace Fuel\Enums;

use MyCLabs\Enum\Enum;

class StatusEnum extends Enum
{
    public const OK = 200;

    public const CREATED = 201;

    public const NO_CONTENT = 204;

    public const UNAUTHORIZED = 401;

    public const NOT_FOUND = 404;

    public const INTERNAL_SERVER_ERROR = 500;
}
