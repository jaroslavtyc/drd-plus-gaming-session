<?php
namespace DrdPlus\Tests\GamingSession\EnumTypes;

use Doctrine\DBAL\Types\Type;
use DrdPlus\GamingSession\EnumTypes\GamingSessionCategoryExperiencesType;
use DrdPlus\GamingSession\EnumTypes\GamingSessionEnumRegistrar;

class GamingSessionEnumRegistrarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_register_all_enums_at_once()
    {
        GamingSessionEnumRegistrar::registerAll();
        self::assertTrue(Type::hasType(GamingSessionCategoryExperiencesType::GAMING_SESSION_CATEGORY_EXPERIENCES));
    }
}