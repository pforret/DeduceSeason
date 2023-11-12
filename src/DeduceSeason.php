<?php

// Author: Peter Forret (pforret, peter@forret.com)

namespace Pforret\DeduceSeason;

use Carbon\Carbon;
use League\Geotools\Coordinate\Coordinate;

class DeduceSeason
{
    const SEASON_WINTER = 'winter';

    const SEASON_SPRING = 'spring';

    const SEASON_SUMMER = 'summer';

    const SEASON_FALL = 'fall';

    public static function fromDateAndLatitude(string $date = null, float $latitude = 0): string
    {
        if (! $date) {
            $date = date('Y-m-d');
        }
        $parsedDate = new Carbon($date);
        $twentyDays = $parsedDate->addDays(-20); // so that we can just use the months
        $twentyMonth = $twentyDays->format('m'); // just the month is enough
        $parseCoordinates = new Coordinate("$latitude, 0");
        $southernHemisphere = $parseCoordinates->getLatitude() < 0;
        if ($twentyMonth >= 3 && $twentyMonth < 6) {
            return $southernHemisphere ? self::SEASON_FALL : self::SEASON_SPRING;
        } elseif ($twentyMonth >= 6 && $twentyMonth < 9) {
            return $southernHemisphere ? self::SEASON_WINTER : self::SEASON_SUMMER;
        } elseif ($twentyMonth >= 9 && $twentyMonth < 12) {
            return $southernHemisphere ? self::SEASON_SPRING : self::SEASON_FALL;
        } else {
            return $southernHemisphere ? self::SEASON_SUMMER : self::SEASON_WINTER;
        }
    }
}
