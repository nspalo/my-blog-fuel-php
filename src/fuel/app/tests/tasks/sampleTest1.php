<?php

declare(strict_types=1);

namespace Fuel\Tests\Tasks;

use Fuel\Core\TestCase;
use Fuel\Enums\StatusEnum;
use Fuel\Tasks\Status;

/**
 * @group TestGroupA
 */
class Tests_SampleTest1 extends TestCase
{
    /**
     * Tests Status::run()
     */
    public function test_run(): void
    {
        $status = Status::run();

        echo PHP_EOL . "Sample Test 1" . PHP_EOL;

        self::assertEquals(StatusEnum::OK, $status);
        self::assertTrue(true);
    }
}
