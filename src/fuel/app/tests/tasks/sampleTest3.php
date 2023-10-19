<?php

declare(strict_types=1);

namespace Fuel\tests\tasks;

use Fuel\Core\Log;
use Fuel\Core\TestCase;

/**
 * @group TestGroupC
 * @group TestGroupB
 */
class Tests_SampleTest3 extends TestCase
{
    public function test_sample(): void
    {
        echo PHP_EOL . "Sample Test 3" . PHP_EOL;

        self::assertTrue(true);
    }
}
