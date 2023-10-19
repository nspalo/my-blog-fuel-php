<?php

declare(strict_types=1);

namespace Fuel\Tasks;

use Fuel\Enums\StatusEnum;

/**
 * Some Dummy Class To Test
 */
class Status
{
    private static $status = StatusEnum::OK;

    public function __construct()
    {
        self::$status = StatusEnum::CREATED;
    }

    public static function run(): int
    {
        return self::$status;
    }
}
