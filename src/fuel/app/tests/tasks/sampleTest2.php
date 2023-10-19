<?php

declare(strict_types=1);

namespace Fuel\tests\tasks;

use Fuel\Core\TestCase;

/**
 * @group TestGroupB
 */
class Tests_SampleTest2 extends TestCase
{
    public function test_anything(): void
    {
        echo PHP_EOL . "Sample Test 2" . PHP_EOL;

        self::assertTrue(true);
    }
}
