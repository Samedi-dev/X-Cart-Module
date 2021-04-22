<?php

namespace XLite\Module\Samedi\AdvancedNoticeProduct;

use XLite\Module\AModule;

class Main extends AModule
{
    public static function getAuthorName(): string
    {
        return 'Samedi DEV';
    }

    public static function getModuleName(): string
    {
        return 'Advanced notice product';
    }

    public static function getDescription(): string
    {
        return 'Модуль позволяющий добавить блок рецензий от известных источников для продукта';
    }

    public static function getMajorVersion()
    {
        return '5.4';
    }

    public static function getMinorVersion()
    {
        return '0.0';
    }
}