<?php

namespace Pforret\DeduceSeason\Tests;

use Pforret\DeduceSeason\DeduceSeason;
use PHPUnit\Framework\TestCase;

class DeduceSeasonTest extends TestCase
{
    public function testFromDateAndLatitude(): void
    {
        $this->assertEquals(DeduceSeason::SEASON_WINTER, DeduceSeason::fromDateAndLatitude('2020-01-01', 50));
        $this->assertEquals(DeduceSeason::SEASON_SUMMER, DeduceSeason::fromDateAndLatitude('2020-01-01', -50));
        $this->assertEquals(DeduceSeason::SEASON_WINTER, DeduceSeason::fromDateAndLatitude('2023-03-20', 1));
        $this->assertEquals(DeduceSeason::SEASON_SPRING, DeduceSeason::fromDateAndLatitude('2023-03-21', 1));
    }
}
