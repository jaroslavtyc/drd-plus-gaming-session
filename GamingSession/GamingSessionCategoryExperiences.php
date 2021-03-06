<?php
declare(strict_types = 1);

namespace DrdPlus\GamingSession;

use Granam\Integer\IntegerInterface;
use Granam\IntegerEnum\IntegerEnum;

class GamingSessionCategoryExperiences extends IntegerEnum
{
    public const MINIMUM_CATEGORY_EXPERIENCES = 0;
    public const MAXIMUM_CATEGORY_EXPERIENCES = 3;

    /**
     * @param int|IntegerInterface $value
     * @return GamingSessionCategoryExperiences|IntegerEnum
     */
    public static function getIt($value): GamingSessionCategoryExperiences
    {
        return self::getEnum($value);
    }

    /**
     * @param mixed $value
     * @return int
     */
    protected static function convertToEnumFinalValue($value): int
    {
        $asInteger = parent::convertToEnumFinalValue($value);
        self::guardExperiencesBoundary($asInteger);

        return $asInteger;
    }

    /**
     * @param int $experiences
     * @throws \DrdPlus\GamingSession\Exceptions\ExperiencesTooHigh
     * @throws \DrdPlus\GamingSession\Exceptions\ExperiencesTooLow
     */
    private static function guardExperiencesBoundary($experiences)
    {
        if ($experiences < self::MINIMUM_CATEGORY_EXPERIENCES) {
            throw new Exceptions\ExperiencesTooLow(
                'Gaming sessions experiences of a single category can not be lesser than '
                . self::MINIMUM_CATEGORY_EXPERIENCES . ', got ' . $experiences
            );
        }
        if ($experiences > self::MAXIMUM_CATEGORY_EXPERIENCES) {
            throw new Exceptions\ExperiencesTooHigh(
                'Gaming sessions experiences of a single category can not be greater than '
                . self::MAXIMUM_CATEGORY_EXPERIENCES . ', got ' . $experiences
            );
        }
    }

}