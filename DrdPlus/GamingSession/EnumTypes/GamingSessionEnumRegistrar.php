<?php
namespace DrdPlus\GamingSession\EnumTypes;

class GamingSessionEnumRegistrar
{
    /**
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function registerAll(): void
    {
        GamingSessionCategoryExperiencesType::registerSelf();
    }
}